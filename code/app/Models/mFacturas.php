<?php 
namespace App\Models;
use CodeIgniter\Model;
class mFacturas extends Model
{
	protected $table = 'facturas';
	protected $primaryKey = 'id_factura';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['fecha', 'descripcion','cantidad', 'precio_u','total'];

	protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
?>