<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean("is_admin")->default(0);
            $table->string("company_name")->default('');
            $table->float("coast_one_day")->default(0);
            $table->float("rm")->default(0);
            $table->float("nr")->default(0);
            $table->float("min_proc")->default(0);
            $table->float("recom_proc")->default(0);
            $table->float("nalog")->default(18);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('company_name');
            $table->dropColumn('coast_one_day');
            $table->dropColumn('rm');
            $table->dropColumn('nr');
            $table->dropColumn('min_proc');
            $table->dropColumn('recom_proc');
            $table->dropColumn('nalog');
        });
    }
}
