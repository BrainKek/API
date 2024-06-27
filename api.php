/**
 * @api {GET} /products View all products
 * @apiVersion 0.1.1
 * @apiName GetProducts
 * @apiGroup Products
 *
 * @apiSuccess {Object[]} products Array of products.
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "Products": [
 *       {
 *           "Id": 1,
 *           "Name": "MacBook",
 *           "Description": "",
 *           "Discount": 0,
 *           "Category": 1
 *       },
 *       {
 *           "Id": 2,
 *           "Name": "Iphone",
 *           "Description": "",
 *           "Discount": 0,
 *           "Category": 1
 *       },
 *       {
 *           "Id": 3,
 *           "Name": "IPad",
 *           "Description": "",
 *           "Discount": 10,
 *           "Category": 2
 *       }
 *   ]
 * }
 *
 */

/**
 * @api {GET} /products/:id View product details
 * @apiName GetProduct
 * @apiGroup Products
 *
 * @apiParam {Number} id Product's unique ID.
 *
 * @apiSuccess {Object} product Product details.
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": 1,
 *       "name": "Product 1",
 *       "price": 10.00,
 *       "description": "Product description",
 *       "image": "product.jpg"
 *     }
 *
 * @apiError 404 Product not found.
 */

/**
 * @api {PUT} /products/:id Update product information
 * @apiName UpdateProduct
 * @apiGroup Products
 *
 * @apiParam {Number} id Product's unique ID.
 * @apiParam {String} [name] Product name.
 * @apiParam {Number} [price] Product price.
 * @apiParam {String} [description] Product description.
 *
 * @apiSuccess {String} message Success message.
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "message": "Product information updated successfully."
 *     }
 *
 * @apiError 404 Product not found.
 * @apiError 403 Only administrators can update product information.
 */

/**
 * @api {POST} /cart Add product to cart
 * @apiName AddToCart
 * @apiGroup Cart
 *
 * @apiParam {Number} productId ID of the product to add to cart.
 * @apiParam {Number} quantity Quantity of the product to add.
 *
 * @apiSuccess {String} message Success message.
 * @apiSuccess {Object} cart Updated cart details.
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "message": "Product added to cart successfully.",
 *       "cart": {
 *         "totalItems": 1,
 *         "totalPrice": 10.00
 *       }
 *     }
 *
 * @apiError 400 Invalid quantity value.
 * @apiError 404 Product not found.
 */
