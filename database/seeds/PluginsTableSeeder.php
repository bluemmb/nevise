<?php

use Illuminate\Database\Seeder;

class PluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('plugins')->insert([
            'title' => 'Learn Git Push',
            'type' => 'moratab',
            'content' => 'Lorem ipsum dolor sit amet, ex est fabulas principes gubergren. Errem luptatum pri at, vis dolore iracundia ne. Maluisset iracundia persequeris cu vim. Malis perfecto conclusionemque ei vel, ius et tempor vocent qualisque, eam facilis fabellas invenire at. Mel te elit nonumy, augue paulo adversarium an pri. Mel in tantas noluisse menandri, rebum discere appareat ei mea. Omnium iudicabit te ius, eos omnes aliquid sententiae ea.',
            'searchable' => 'Lorem ipsum dolor sit amet, ex est fabulas principes gubergren. Errem luptatum pri at, vis dolore iracundia ne. Maluisset iracundia persequeris cu vim. Malis perfecto conclusionemque ei vel, ius et tempor vocent qualisque, eam facilis fabellas invenire at. Mel te elit nonumy, augue paulo adversarium an pri. Mel in tantas noluisse menandri, rebum discere appareat ei mea. Omnium iudicabit te ius, eos omnes aliquid sententiae ea.'
        ]);
        DB::table('plugins')->insert([
            'title'=>'Learn Git Pull',
            'type'=>'moratab',
            'content' => 'Lorem ipsum dolor sit amet, te sit iisque eripuit epicurei, mei quodsi euismod an, viris philosophia reprehendunt pro te. Vel no graece accusamus omittantur, at consul mnesarchum vim. Eu sit nonumy voluptua mandamus, has an cibo vitae molestie. Id veniam meliore mel, at nam nihil antiopam voluptatibus, ferri option mei no. His duis complectitur ad. Cu ius denique invenire suscipiantur, ad tation democritum contentiones sed, cu duo everti delenit.',
            'searchable' => 'Lorem ipsum dolor sit amet, te sit iisque eripuit epicurei, mei quodsi euismod an, viris philosophia reprehendunt pro te. Vel no graece accusamus omittantur, at consul mnesarchum vim. Eu sit nonumy voluptua mandamus, has an cibo vitae molestie. Id veniam meliore mel, at nam nihil antiopam voluptatibus, ferri option mei no. His duis complectitur ad. Cu ius denique invenire suscipiantur, ad tation democritum contentiones sed, cu duo everti delenit.'
        ]);
        DB::table('plugins')->insert([
            'title'=>'Learn Git Commit',
            'type'=>'moratab',
            'content' => 'Lorem ipsum dolor sit amet, est eu vitae feugait. Facer utroque detracto pro ea, ius tamquam mentitum voluptatibus no, eu cum mundi platonem. Tritani theophrastus ea sit. Deserunt voluptatibus et vel, pri iriure disputando ne. Cum dicit dicunt no, mei ne pertinacia sententiae definitiones, modus nullam rationibus usu ei.',
            'searchable' => 'Lorem ipsum dolor sit amet, est eu vitae feugait. Facer utroque detracto pro ea, ius tamquam mentitum voluptatibus no, eu cum mundi platonem. Tritani theophrastus ea sit. Deserunt voluptatibus et vel, pri iriure disputando ne. Cum dicit dicunt no, mei ne pertinacia sententiae definitiones, modus nullam rationibus usu ei.'
        ]);
    }
}
