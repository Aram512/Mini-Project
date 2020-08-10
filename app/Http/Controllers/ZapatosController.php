<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class ZapatosController extends Controller
{
    public function index() {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $autos = $collection->find();
        return view('Admin.Autos.index', [ "autos" => $autos]);
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $autos = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Autos.Details', [ "autos" => $autos ]);
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $autos = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('.Admin.Autos.edit', [ "autos" => $autos ]);
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $autos = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('.Admin.autos.delete', [ "autos" => $autos ]);
    }

    public function Update() {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $autos = [
            "Name" => request("Name"),
            "Miles_per_Gallon" => request("Miles_per_Gallon"),
            "Cylinders" => request("Cylinders"),
            "Horsepower" => request("Horsepower"),
            "Weight_in_lbs" => request("Weight_in_lbs"),
            "Year" => request("Year"),
            "Origin" => request("Origin"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("autosid"))
        ],[
            '$set' => $autos
        ]);

            return redirect("/zapatos/".request("autosid"));
    }
    public function Remove() {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $autos = [
            "Name" => request("Name"),
            "Miles_per_Gallon" => request("Miles_per_Gallon"),
            "Cylinders" => request("Cylinders"),
            "Horsepower" => request("Horsepower"),
            "Weight_in_lbs" => request("Weight_in_lbs"),
            "Year" => request("Year"),
            "Origin" => request("Origin"),
        ];
        $delteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("autosid"))
        ],[
            '$set' => $autos
        ]);
        return redirect("/zapatos");
    }
    public function AddComment() {
        $collection = (new MongoDB\Client)->AramStore->Autos;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")
        ];
        $autos = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('autosid')) ]);
        $comments = $autos->comments;
        if (count($comments) == 0 || $comments == null || empty($comments)) {
            $comments = [$comment];
        } else {
            $comments = [$comment, ...$comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('autosid'))
        ],[
            '$set' => [ "comments" => $comments ]
        ]);

        return redirect("/zapatos/".request('autosid'));
    }
}
