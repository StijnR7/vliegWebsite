<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include ('header.php'); ?>
    
    <main>
        <div id="createbak" class="content-section active">
            <div class="contact-bak">
                <h2>Create New Product</h2>
                <form id="createForm">
                    <div class="veldje">
                        <label for="productName">Product Name</label>
                        <input type="text" id="productName" placeholder="Product Name" required>
                    </div>
                    <div class="veldje">
                        <label for="price">Price</label>
                        <input type="number" id="price" placeholder="Price" required>
                    </div>
                    <div class="veldje">
                        <label for="description">Description</label>
                        <textarea id="description" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="knoppie">Create</button>
                </form>
                <p><a href="#" id="updateLink">Switch to Update Product</a> | <a href="#" id="deleteLink">Switch to Delete Product</a></p>

                <table class="product-table">
                    <tbody>
                     
                        <?php include ('vakantie.php'); ?>
                   
                    </tbody>
                </table>
            </div>
        </div>

        <div id="updatebak" class="content-section">
            <div class="contact-bak">
                <h2>Update Product</h2>
                <form id="updateForm">
                    <div class="veldje">
                        <label for="productId">Product ID</label>
                        <input type="text" id="productId" placeholder="Product ID" required>
                    </div>
                    <div class="veldje">
                        <label for="newProductName">New Product Name</label>
                        <input type="text" id="newProductName" placeholder="New Product Name">
                    </div>
                    <div class="veldje">
                        <label for="newPrice">New Price</label>
                        <input type="number" id="newPrice" placeholder="New Price">
                    </div>
                    <div class="veldje">
                        <label for="newDescription">New Description</label>
                        <textarea id="newDescription" placeholder="New Description"></textarea>
                    </div>
                    <button type="submit" class="knoppie">Update</button>
                </form>
                <p><a href="#" id="createLink">Switch to Create Product</a> | <a href="#" id="deleteLink">Switch to Delete Product</a></p>

                <table class="product-table">
                    <tbody>
                        <?php include ('vakantie.php'); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="deletebak" class="content-section">
            <div class="contact-bak">
                <h2>Delete Product</h2>
                <form id="deleteForm">
                    <div class="veldje">
                        <label for="deleteProductId">Product ID</label>
                        <input type="text" id="deleteProductId" placeholder="Product ID" required>
                    </div>
                    <button type="submit" class="knoppie">Delete</button>
                </form>
                <p><a href="#" id="createLink">Switch to Create Product</a> | <a href="#" id="updateLink">Switch to Update Product</a></p>
                <table class="product-table">
                    <tbody>
                        <?php include ('vakantie.php'); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="assets/javascript.js/admin.js"></script>
</body>
</html>
