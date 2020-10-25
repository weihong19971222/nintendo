<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $order_no
 * @property string $receive_name
 * @property string $receive_phone
 * @property string $receive_address
 * @property string $status
 * @property int $total_price
 * @property string $remark
 * @property string $created_at
 * @property string $updated_at
 * @property string $deliverymethod
 * @property string $paymentmethod
 * @property OrderItem[] $orderItems
 */
class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['order_no', 'receive_name', 'receive_phone', 'receive_address', 'status', 'total_price', 'remark', 'created_at', 'updated_at', 'deliverymethod', 'paymentmethod'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('App\OrderItems');
    }
}
