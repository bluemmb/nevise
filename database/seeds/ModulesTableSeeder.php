<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('modules')->insert([
            'title' => 'Git',
            'description' => 'Lorem ipsum dolor sit amet, ad scripta tritani vim, explicari delicatissimi ea duo. Nostrud repudiandae est eu, sed ad reprimique consectetuer. Id mei veri prodesset adipiscing, et vim legendos consectetuer, vero deleniti menandri in duo. Eos latine accusam ea, ex nostrum facilisi mnesarchum has, aeterno meliore pericula duo cu. Mea dolor persequeris an.'
        ]);
        DB::table('modules')->insert([
            'title' => 'Bash',
            'description' => 'Lorem ipsum dolor sit amet, pro eu sumo unum consectetuer, essent definiebas cu pri. Vidisse mandamus cu vim, pri ei tollit tritani, ea quo inermis repudiare. Quo ad mentitum adolescens consectetuer. Moderatius liberavisse sea in. Mei velit eirmod at, illum quando ut duo. Eu agam graeci nonumes eam.'
        ]);
        DB::table('modules')->insert([
            'title' => 'Grub',
            'description' => 'Lorem ipsum dolor sit amet, cu eum alia explicari elaboraret, te cum doctus vulputate vituperatoribus. Ad quo dico commune. Ad vix ubique tempor erroribus, id illum facete duo, noster iisque aperiam ea ius. Id invidunt detraxit sed, nominavi elaboraret ei sea. Falli abhorreant repudiandae pro at.'
        ]);
        DB::table('modules')->insert([
            'title' => 'Laravel',
            'description' => 'Lorem ipsum dolor sit amet, sale partem tritani at ius. Suavitate instructior id usu, ei sea oblique appetere. Nec no expetenda accusamus comprehensam, mazim nihil ridens id mea. Ad vide simul epicuri quo. Ex nonumy numquam sea. Veri reprimique ne pri.'
        ]);
        DB::table('modules')->insert([
            'title' => 'MVC',
            'description' => 'Lorem ipsum dolor sit amet, quis saperet instructior pri ei. Sit ea hinc quando. Scaevola phaedrum inimicus in sit, ad case option efficiantur his, ad libris feugiat cum. At duo quas facer repudiare. Exerci dolorem accumsan et vim, ullum philosophia eos ea. Pro eu laudem reprimique, dicit sanctus tractatos in mea, eos error sadipscing ut. Exerci posidonium intellegam nam cu, meliore epicurei eos ex.'
        ]);
    }
}
