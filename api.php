/**
 * @apiDefine ProductNotFoundError
 *
 * @apiError ProductNotFound The id of the Product was not found.
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "ProductNotFound"
 *     }
 */
// ------------------------------------------------------------------------------------------
// View all products
// ------------------------------------------------------------------------------------------
/**
 *
 * @apiVersion 0.1.1
 * @api {get} /products
 * @apiName GetProducts
 * @apiGroup Products
 * @apiParam {Number} id  Products ID
 * @apiSuccess {String} products Products Name.
 * @apiSuccess {String} quantity Product Quantity.
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "product": "MacBook",
 *       "quantity": "89"
 *     }
 *      {
 *       "product": "iphone",
 *       "quantity": "582"
 *     }
 */
// ------------------------------------------------------------------------------------------
// View the product by its id
// ------------------------------------------------------------------------------------------
 /**
 * @api {get} /product/{id}
 * @apiName GetProduct
 * @apiGroup Product
 * @apiParam {Number} id  Product ID
 * @apiSuccess {String} product Product Name.
 * @apiSuccess {String} quantity Product Quantity.
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "product": "MacBook",
 *       "quantity": "89"
 *     }
 *
 */
// ------------------------------------------------------------------------------------------
// Add prodсts in card.
// ------------------------------------------------------------------------------------------
/**
 * @api {post} /cart/add
 * @apiName PutProduct
 * @apiGroup Product
 *
 * @apiParam {Number} id  Product ID.
 * @apiParam {String} [product_name] Change product name.
 * @apiParam {String} [quantity]  Change quantity.
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *
 * @apiUse ProductNotFoundError 
 */
// ------------------------------------------------------------------------------------------
// Change product data 
// ------------------------------------------------------------------------------------------
/**
 * @api {put} /product/{id}
 * @apiBody {String} [product_name]       Optional Product Name.
 * @apiBody {String} quantity          Quantity.
 * @apiBody {String} syze="6.5"      Mandatory with default value "6.5".
 * @apiBody {Number} [date=2024-09-09]     Production date.
 *
 */
