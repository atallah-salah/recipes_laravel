<?php

use Illuminate\Database\Seeder;

class InsertData extends Seeder
{
//    insert user (name:atallah,email:atallahsalah992@gmail.com,password:123456)
//    insert some recipes
//
    public function run(){
        DB::table('users')->insert([
            'name' => 'atallah',
            'email' => 'atallahsalah992@gmail.com',
            'password' => bcrypt('123456'),
        ]);
//        insert recipes
            $this->addRecipe();
    }

    public function addRecipe(){
        DB::table('food_recipes')->insert([
            'name' => 'Beetroot & onion seed soup',
            'disc' => 'A deep red autumnal soup that\'s low fat, vegetarian and full of flavour. Beetroot and apple give this soup a subtle sweet flavour, while lentils add protein and bulk 
             250g cooked beetroot
             100g canned lentils
             1 small apple
             1 crushed garlic clove
             1 tsp onion seeds (nigella), plus extra to serve
             250ml vegetable stock
              ',
            'image' => 'images/0.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);

        DB::table('food_recipes')->insert([
            'name' => 'Roasted squash & red onion with pistachios',
            'disc' => 'Showcase butternut squash with this vibrant vegan side. Garnished with jewel-like pomegranate seeds and crunchy pistachios, serve as part of a stunning meze 
              1 large butternut squash, peeled, ends trimmed, halved widthways and spiralized into thick noodles
              1 large red onion, peeled, ends trimmed and spiralized using the ribbon attachment
              2 tbsp olive oil
              2 tsp sumac
              50g pomegranate seeds
              30g pistachios, toasted and roughly chopped
            ',
            'image' => 'images/1.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);

        DB::table('food_recipes')->insert([
            'name' => 'Caramelised onion & chicory tart with Gorgonzola',
            'disc' => 'Blue cheese and chicory is a classic combination that defines this Tatin-style tart, with hazelnuts added for extra crunch. Perfect for entertaining 
             1 sheet ready-rolled puff pastry
             1 tbsp olive oil
             1 tsp butter
             4 thyme sprigs
             1 tbsp brown sugar
             2 small onions, peeled and cut into thick round slices
             2 heads of red chicory, trimmed and sliced in half lengthways
              ½ lemon, juiced
             75g Gorgonzola (or vegetarian alternative)
             1 tbsp toasted hazelnuts (optional)
            ',
            'image' => 'images/2.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);

        DB::table('food_recipes')->insert([
            'name' => 'Caramelised onion quiche with cheddar & bacon',
            'disc' => 'Contains pork – recipe is for non-Muslims only
             Make quiche Lorraine to perfection every time with this easy recipe for a crisp pastry base and rich smoked bacon, cheese and thyme filling 
             25g butter
             2 large onions, halved and thinly sliced
             1 tbsp fresh thyme leaves, plus a few sprigs
             350g shop-bought shortcrust pastry
             plain flour, for dusting
             200g pack smoked bacon lardons
             300g pot double cream
             100ml milk
             3 large eggs
             2-3 pinches of nutmeg, plus extra for the top
             140g mature cheddar, grated
            ',
            'image' => 'images/3.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);

        DB::table('food_recipes')->insert([
            'name' => 'Porridge with blueberry compote',
            'disc' => 'Top high-fibre porridge oats with creamy Greek yogurt and healthy blueberries - buy frozen to help cut the cost of this filling breakfast
             6 tbsp porridge oats
             just under ½ x 200ml tub 0% fat Greek-style yogurt
             ½ x 350g pack frozen blueberries
             1 tsp honey (optional)
             ',
            'image' => 'images/4.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);

        DB::table('food_recipes')->insert([
            'name' => 'Blackcurrant compote',
            'disc' => 'A simple fruity compote to dollop onto your breakfast bowl, taking it from bland to berry beautiful 
             juice ½ lemon
             500g blackcurrants
             100g golden caster sugar
             ',
            'image' => 'images/5.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Fennel compote',
            'disc' => 'Fennel goes well not just with fish but also pork and poultry, and this soft and juicy side makes a great accompaniment to a Sunday roast 
             100g butter
             4 large fennel bulbs, thinly sliced
             1 onion, thinly sliced
             vegetable oil, for frying
             75g smoked bacon, chopped
             ½ small pack parsley, chopped
            ',
            'image' => 'images/6.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Spiced rice pudding with blackberry compote',
            'disc' => 'Cinnamon, cardamom and nutmeg flavour this healthier rice pudding served with a naturally sweetened, chunky berry sauce 
             200g brown rice
             2 tsp cornflour
             500g skimmed milk
             405g can light condensed milk
             1 long or 2 short cinnamon sticks
             5 cardamom pods, crushed with a rolling pin
             good grating nutmeg
             1 vanilla pod, split and seeds scraped out
             500g frozen blackberries
             1 tbsp agave syrup
            ',
            'image' => 'images/7.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Zingy blackberry lemonade',
            'disc' => 'For a refreshing berry drink, try this homemade lemonade with blackberries and mint - keep chilled for up to a week 
             2 lemons, cut into quarters, pips removed
             150g punnet blackberries
             few mint sprigs, leaves picked
             50g icing sugar
            fizzy water or Prosecco, to serve
            ',
            'image' => 'images/8.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Frozen blackberry yogurt',
            'disc' => 'Showcase ripe, seasonal blackberries in this simple-to-make dessert with honey and Greek yogurt 
             200g blackberries
             40g golden caster sugar
             300g Greek yogurt
             50ml honey
             100ml goat\'s milk
            ',
            'image' => 'images/9.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Slow cooker bio yogurt',
            'disc' => 'You need just two ingredients – milk and live yogurt – to make this bio yogurt, full of gut-friendly probiotics. Mix with fruit, or cereal for breakfast 
             2l whole milk
             100ml live yogurt, either shop bought or from a previous homemade batch
             ',
            'image' => 'images/10.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Berry yogurt pots',
            'disc' => 'Ever feel peckish between meals during the day? These bio yogurt pots brimming with berries, seeds and nuts make a quick, filling and healthy morning or afternoon snack 
             150g bio yogurt
             160g blueberries, raspberries or cherries (or a combination)
             1 tbsp pumpkin seeds, sunflower seeds or flaked almonds
             a little chopped mint (optional)
            ',
            'image' => 'images/11.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Blackberry doughnuts',
            'disc' => 'Serve these blackberry doughnuts warm with custard, which goes particularly well with the zingy jam filling. They take a little effort but are so worth it 
            50g unsalted butter
            150ml whole milk
            1 tbsp fast-action dried yeast (from a sachet)
            1 tbsp golden caster sugar, plus extra to coat the doughnuts
            300g strong white bread flour, plus extra for dusting
            1 egg, lightly beaten
            vegetable oil, for the tins and for deep-frying
            custard, to serve
            250g jam sugar
            500g blackberries
            ½ lemon, juiced
            ',
            'image' => 'images/4.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Porridge with blueberry compote',
            'disc' => 'Top high-fibre porridge oats with creamy Greek yogurt and healthy blueberries - buy frozen to help cut the cost of this filling breakfast
             6 tbsp porridge oats
             just under ½ x 200ml tub 0% fat Greek-style yogurt
             ½ x 350g pack frozen blueberries
             1 tsp honey (optional)
             ',
            'image' => 'images/12.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Porridge with blueberry compote',
            'disc' => 'Top high-fibre porridge oats with creamy Greek yogurt and healthy blueberries - buy frozen to help cut the cost of this filling breakfast
             6 tbsp porridge oats
             just under ½ x 200ml tub 0% fat Greek-style yogurt
             ½ x 350g pack frozen blueberries
             1 tsp honey (optional)
             ',
            'image' => 'images/13.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Bramley & blackberry pie',
            'disc' => '
            225g cold unsalted butter, chopped into small pieces
            350g plain flour
            50g icing sugar
            1 large egg yolk (save the white for brushing the pastry)
            900g Bramley apples (about 4) peeled, cored, quartered and thinly sliced
            140g golden caster sugar, plus extra for sprinkling
            1 tbsp fine polenta or ground almonds
            1 tbsp cornflour or plain flour, plus extra for dusting
            1½ tsp ground cinnamon
            200g blackberries, halved if very large
            egg white, for brushing (reserved from making the pastry)
            cream or ice cream, to serve
            ',
            'image' => 'images/14.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Bramley Apple and Wensleydale Cobbler',
            'disc' => '
            This toothsome cobbler is best served piping hot from the oven.
            at least 1kg Bramley apples
            juice of 1 lemon, optional
            85g refined caster sugar
            50g light muscovado sugar
            1 scant tsp ground ginger
            225g plain flour
            1 tbsp baking powder
            scant ½ tsp fine sea salt
            50g cold, unsalted butter, roughly chopped
            140g Wensleydale cheese, grated
            175ml buttermilk (or fresh milk and 1tsp lemon juice)
            mascarpone, to serve
             ',
            'image' => 'images/15.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
        DB::table('food_recipes')->insert([
            'name' => 'Red cabbage with Bramley apple & walnuts',
            'disc' => '
            A sweet, crunchy cabbage dish with a superhealthy boost of vitamin C
            1 red cabbage, finely sliced
            25g butter
            1 Bramley apple, peeled and grated
            1 bay leaf
            3 cloves
            100ml cider vinegar
            25g light muscovado sugar
            handful walnuts, toasted and chopped
            ',
            'image' => 'images/16.jpg',
            'user_id'=>'1',
            'author'=>'atallah',
            'created_at'=>now()
        ]);
    }
}
