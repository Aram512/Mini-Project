 <?php

 $collection = (new MongoDB\Client)->AramStore->Autos;
 $comment = [
    "user_id" => "5ee224c74250884f6c89c94e",
    "comment" => "Works good enough.",
    "date" => date("Y-m-d H:i:s")
];
$autos = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950") ]);
$comments = $autos->comments;
if (count($comments) == 0 || $comments == null || empty($comments)) {
    $comments = [$comment];
} else {
    $comments = [$comment, ...$comments];
}
$updateOneResult = $collection->updateOne([
    "_id" => new MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950")
],[
    '$set' => [ "comments" => $comments ]
]);

$product = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950") ]);
print_r($product->comments);

 $document =$collection->find();



