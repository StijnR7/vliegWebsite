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
        <div class="section-form" id="createbak">
            <div class="contact-bak">
                <h2>Create New Product</h2>
                <form class="createForm" action="" id="method">
                    <div class="veldje">
                        <label for="productName"></label>
                        <input type="text" id="productName" placeholder="Product Name" required>
                    </div>
                    <div class="veldje">
                        <label for="price"></label>
                        <input type="number" id="price" placeholder="Price" required>
                    </div>
                    <div class="veldje">
                        <label for="description"></label>
                        <textarea id="description" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="knoppie">Create</button>
                </form>
                <p><a href="#" id="updateLink">Switch to Update Product</a> | <a href="#" id="deleteLink">Switch to Delete Product</a></p>
         </div>
         </div>


         <div class="section-form" id="updatebak">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Productnaam</th>
                <th>Omschrijving</th>
                <th>Prijs</th>
                <th>Categorie</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form class="createForm" action="" method="post">
                            <div class="veldje">
                            <input type="hidden" name="id" value="">
                             </div>
                             <div class="veldje">
                            <input type="text" name="productnaam" value="">
                           </div>      
                            <div class="veldje">
                            <input type="text" name="omschrijving" value="">
                              </div>
                            <div class="veldje">
                            <input type="text" name="prijs" value="">
                              </div>
                            <div class="veldje">
                            <input type="text" name="categorie" value="">
                          </div>
                          <button type="submit" class="knoppie">Update</button>
                        </form>
                        <p><a href="#" id="createLink">switch to create</a> | <a href="#" id="deleteLink">Switch to Delete Product</a></p>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>

        <div class="section-form" id="registerbak">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Productnaam</th>
                <th>Omschrijving</th>
                <th>Prijs</th>
                <th>Categorie</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form class="createForm" action="" method="post">
                            <div class="veldje">
                            <input type="hidden" name="id" value="id">
                              </div>
                            <div class="veldje">
                            <input type="text" name="productnaam" value="naam">
                             </div>
                            <div class="veldje">
                            <input type="text" name="omschrijving" value="omschrijving">
                              </div>
                            <div class="veldje">
                            <input type="text" name="prijs" value="prijs">
                             </div>
                            <div class="veldje">
                            <input type="text" name="categorie" value="cato">
                            </div>
                            <button type="submit" class="knoppie">Delete</button>
                        </form>
                        <p><a href="#" id="createLink">Switch to create</a> | <a href="#" id="updateLink">Switch to update</a></p>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
    </main>

    <script src="assets/javascript.js/admin.js"></script>
</body>
</html>
