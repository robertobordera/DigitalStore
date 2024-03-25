    php artisan migrate:reset
    php artisan migrate:refresh
    php artisan migrate:rollback --batch=3
    php artisan make:model Author --migration
    php artisan migrate
    php artisan make:request NoteRequest
    php artisan make:controller PostController --resource
    php artisan route:list
    protected $table = "notes";

    //Campos que pueden ser manipulados
    protected $fillable = ["title","description","deadline","done"];

    //Para castear
    protected $casts = [
        "deadline" => "date"
    ];

    //Para ocultar algun campo como el password
    protected $hidden = [];

    //Hacer consultas directamente a la base de datos
    $users = User::all();
    $users = User::find(1);
    $users = User::where('age','>=',21)->orWhere('zip_code', 688585)->orderBy('age','asc')->get();

    