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
		Schema::create('doctor_hospitals', function (Blueprint $table) {
			$table->id();
			$table->foreignId('doctor_id')->constrained('doctors');
			$table->foreignId('hospital_id')->constrained('hospitals');
			$table->date('work_date');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('doctor_hospitals');
	}
};
