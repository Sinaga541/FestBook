<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReturnedAtAndReceiverUserIdOnRentBorrowHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rent_history', function (Blueprint $table) {
            $table->dateTime('returned_at')->nullable()->default(null)->after('product_id');
            $table->bigInteger('admin_id')->nullable()->default(null)->after('returned_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rent_history', function (Blueprint $table) {
            $table->dropColumn('returned_at');
            $table->dropColumn('admin_id');
        });
    }
}
