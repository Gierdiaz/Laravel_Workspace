<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EloquentCollectionController extends Controller
{
    public function CollectionsExemples() 
    {
/*         $data = collect([
            ['average' => 10],
            ['average' => 10],
            ['average' => 20],
            ['average' => 40]
        ])->avg('average');

        dd($data = collect($data)->average()); */


        //The methods MAX returns the maximum value of a given key
/*         $data = collect([ 
            ['max' => 10, 'value' => 10, 'active' => true],
            ['max' => 20, 'value' => 20, 'active' => false ],
            ['max' => 30, 'value' => 30, 'active' => false ] 
        ]);

        dd(collect($data)->max(function($maxValue) {

            if(!$maxValue['active']) {
                return null;
            };

            return $maxValue['max'] + $maxValue['value'];
        })); */
        

        //The MEDIAN method returns the median values of a given key;
/*         $data = collect([
            ['value' => 1],
            ['value' => 2],
            ['value' => 3],
            ['value' => 4]
        ])->median('value');

        dd(collect($data)->median()); */


        //The MIN method returns the minimum value of a given key;
/*         $data = collect([
            ['minValue' => 8, 'addValue' => 10],
            ['minValue' => 9, 'addValue' => 20],
            ['minValue' => 7, 'addValue' => 30]
        ]);

        //using arrow function (fn)
        dd(collect($data)->min(fn($value) => 
            $value['minValue'] + $value['addValue']
        )); */


        //The COLLAPSE method collapses a collection of arrays into a single flat collection;
/*         $data = collect([
            [1, 2 ,3],
            [4, 5 ,6],
            [7, 8, 9],
            [10, 11, 12],
            [13, 14, 15],
            [['A'], ['B'], ['C']],
            ['D', 'F', 'G']
        ]);

        dd($data->collapse()); */


        //The CHUNK method breaks the collection into multiple smaller collections of a given size
/*         $data = collect([1,2,3,4,5,6,7,8,9,10,11,12]);

       dd(collect($data->chunk(1))); */


       //The COMBINE method combines the values of the collection as keys with values of another arrays or collection;
/*        $combine = collect(['name', 'age']);

       return $combine->combine(['Argus', 1]); */


       //The CONCAT method appends the given array or collection's values onto the end of the another collection;
/*        $concat = collect(['José']);

       //The concat doens't count the key only the value;
       return $concat->concat(['Argus'])->concat(['name' => 'Gudi']); */


       //The CONTAINS method detemines whether the collection contains a given item.
       //You may pass a closure to the contains method to determine if an element exists
       //in the collection matching a given truth test;
/*         $data = collect(['one' => 1, 2, 3, 4, 5, 6, 7, 8, 9]);

        dd(collect($data->contains(function($key, $value,) {
            return  $value == 1;
        }))); */


        //The COUNT method returns the total number of items in the collection;
/*         $data = collect([1,1,1,1,1,1,1,1,1,1]);

        dd(collect($data->count())); */


        //The CROSSJOIN method cross joins the values among the given arrays or
        //collections, returning a Cartesian product with all possible permutations;
/*         $matrix = collect(['Mustang', 'GT', 'F150']);

        dd(collect($matrix)->crossJoin(
            ['Automatic', 'Manual'],
            ['Blue', 'Black', 'White'],
            [2022, 2023]
        )); */


        //The DIFF method compares the collection against another collection or a plain PHP array
        //based on its values. This method will return the values in the origianl collection
        //the are not present in the given collection;
/*         $collection = collect([1,3,5,7,9]);

        $diffCollection = collect($collection)->diff([2,4,6,8,11]);

        dd($diffCollection); */


        //The DIFFASSOC method compares the collection against another collection
        //or a plain PHP array based on its keys and values. This method will return
        //the key/values pairs in the original collection that are not present in the 
        //given collection
/*         $data = collect([

                'color'  => 'orange',
                'type'   => 'fruit',
                'reamin' => 6
            ]);

        $diffAssoc = collect($data)->diffAssoc([
            
            'color'   => 'white',
            'type'    => 'object',
            'remain'  => 5,
            'used'    => 6
        ]);

        dd($diffAssoc); */


        //The DIFFKEYS method compares the collection against another collection or a
        //plain PHP array based on its keys. This method will return the key/value
        //pairs in the original collection that are not present in the given collection;
/*         $data = collect([1 => 'one', 2 => 'two', 3 => 'three']);

        $diffKeys = collect($data)->diffKeys([4 => 'one', 2 => 'two', 3 => 'two']);

        dd($diffKeys); */


        //The TAP method passes the collection to the given callback, allowing you to
        //''tap'' into the collection at a specific point and do something with
        //the items while not affecting the collection itself. The collection is then
        //retuned by the tap method;
/*         $data = collect([1, 2, 3, 4])
            ->reverse()
            ->tap(function($collection) {
                $collection->reverse()->each(function($value) {
                    dump('Values in Tap: '.$value);
                });
            })
            ->first();

        dd($data); */

        
        
        //The MAP method iterates through the collection and passes each value to the given callback.
        //The callback is free to modify the item and return it, thus forming a new collection of modified items;
/*         $data = collect([1,2,3,4]);

        $multiplied = $data->map(function($item, $key) {
            return $item * $key;
        });

        dd($multiplied); */


        //The MAPWITHKEYS method iterates through the collection and passes each value to the given
        //callback. The callback should return an associative  array containing a single key/ value pair
/*         $data = collect([
            [
                'name' => 'john',
                'department' => 'Sales',
                'email' => 'john@example.com'
            ],
            [
                'name' => 'Jane',
                'department' => 'Marketing',
                'email' => 'jane@example.com'
            ]
        ]);

        $keyed = $data->mapWithKeys(function($item, $key) {
            return [$item['email'] => $item['name']];
        });

        dd($keyed); */


        //The MAPINTO method iterates over the collection, creating a new instance of the given
        //class by passing the value into the constructor;
        $collection = collect(['USD', 'EUR', 'BR']);

        $currency = $collection->mapInto(Currency::class);

        dd($currency);

    }

}

class Currency 
{
    //Create a new currency instance
    function __construct(
        public string $code
    ) {}
}
