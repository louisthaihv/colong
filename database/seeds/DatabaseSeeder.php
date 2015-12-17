<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(ArticleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(DailyEventTableSeeder::class);
        $this->call(WeekTableSeeder::class);
        $this->call(ClanTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(GalaryTableSeeder::class);
        $this->call(PopupTableSeeder::class);
        $this->call(CardTableSeeder::class);
        $this->call(CardUserTableSeeder::class);
        $this->call(GiftTableSeeder::class);
        $this->call(GiftUsersTableSeeder::class);
        $this->call(ServerTableSeeder::class);
        $this->call(CharacterTbaleSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ItemTypeTableSeeder::class);
        $this->call(GiftFresherTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
}
