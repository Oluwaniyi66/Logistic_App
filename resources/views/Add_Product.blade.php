<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
            .p-cat, .p-title {
                display: flex;
                justify-content:center;
                margin: 20px;
            }
            .p-type {
                display: flex;
                justify-content:center;
                margin: 20px;
                
            }
            .pd-desc {
                display: flex;
                justify-content:center;
                
                margin: 20px;
            }
            .pd-img {
                display: flex;
                justify-content:center;
                margin: 20px;
                
            }
            .pd-img2 {
                display: flex;
                justify-content:center;
                margin: 20px;

            }
    </style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
                @csrf

        <h1 class="p-title">Add a Product</h1>
        <div class="p-type">
            <input type="text" name="name" placeholder="Product Name" id="">
            <input type="text" name="price" placeholder="Product Price" id="">
            <input type="text" name="discount" placeholder="Product Discount" id="">
        </div>
        <div class="p-cat">
            <input type="file" name="p_image" id="">
            <select name="p_category" id="">
                <option value="pc">Product Category</option>
                <option value="Prestashop">Prestashop</option>
                <option value="Magento">Magento</option>
                <option value="Bigcommerce">Bigcommerce</option>
                <option value="osCommerce">osCommerce</option>
                <option value="3dcart">3dcart</option>
                <option value="Bags">Bags</option>
                <option value="Accessories">Accessories</option>
                <option value="Watches">Watches</option>
            </select>
        </div>
        <div class="pd-desc">
            <textarea name="s_desc" id="" cols="30" rows="10" placeholder="short description"></textarea>
            <textarea name="l_desc" id="" cols="30" rows="10" placeholder="long description"></textarea>
        </div>
        <div class="pd-img">
            <div>
                
                <label for="">Pdt alt img1</label>
                <input type="file" name="pd_img1" src="" alt="" placeholder="" >
            </div>
            <div>
    
                <label for="">Pdt alt img2</label>
                <input type="file" name="pd_img2" src="" alt="" placeholder="pdt alt img2" >
            </div>
            
        </div>
        <div class="pd-img2">
            <div>
    
                <label for="">Pdt alt img3</label>
                <input type="file" name="pd_img3" src="" alt="" placeholder="Pdt alt img3 " >
            </div>
            <div>
                <label for="">Pdt alt img4</label>
                <input type="file" name="pd_img4" src="" alt="" placeholder="Pdt alt img4" >
    
            </div>
        </div>
        <div class="pd-desc">
            <button type="submit">Add Product</button>
    
        </div>
    </form>
</body>
</html>