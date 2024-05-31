# Det har jeg lavet:

## Use database seeds to create first user with email admin@admin.com and password "password"

Løsning kan findes i /database/seeders, eller se koden herunder

```
{
 {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

}
```

## Companies DB table consists of these fields: Name (required), email, logo (minimum 100x100), website

## Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone

## Use database migrations to create those schemas above

```
   public function up(): void
    {
        Schema::create('Companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->timestamps();
            $table->string('name')->require();
            $table->string('email');
            $table->binary('logo');
            $table->string('website');
        });
    }
```

```
public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->timestamps();
            $table->string('first_name')->require();
            $table->string('last_name')->require();
            $table->foreign('employee_id')->references('company_id')->on('companies');
            $table->string('email');
            $table->string('phone');
        });
    }

##     