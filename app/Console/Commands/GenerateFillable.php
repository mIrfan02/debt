<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class GenerateFillable extends Command
{
    protected $signature = 'generate:fillable {model}';

    protected $description = 'Generate fillable properties for a specific model based on migrations';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $model = $this->argument('model');

        $table = Str::snake(Str::pluralStudly($model));

        if (class_exists("App\\Models\\$model")) {
            $modelClassName = Str::studly($model);
            $columns = Schema::getColumnListing($table);

            $fillable = [];
            foreach ($columns as $column) {
                $fillable[] = "'$column'";
            }

            file_put_contents(app_path("Models/$modelClassName.php"), "<?php\n\nnamespace App\Models;\n\nuse Illuminate\Database\Eloquent\Model;\n\nclass $modelClassName extends Model\n{\n    protected \$fillable = [".implode(', ', $fillable)."];\n}");
            $this->info("Fillable properties generated for model: $modelClassName.");
        } else {
            $this->error("Model not found: $model");
        }
    }
}
