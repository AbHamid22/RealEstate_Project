<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PurchaseDetail extends Model{

public function product() {
    return $this->belongsTo(Product::class);
}

public function purchase() {
    return $this->belongsTo(Purchase::class);
}

public function uom() {
    return $this->belongsTo(Uom::class);
}

}
?>
