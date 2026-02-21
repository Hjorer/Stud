<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 100)->change();
            $table->string('email')->comment('my comment');
            $table->string('salary')->default('0');
            $table->integer('age')->unsigned()->nullable()->change();
            $table->string('sex')->after('id')->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'firstname');
            $table->renameColumn('surname', 'secondname');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
