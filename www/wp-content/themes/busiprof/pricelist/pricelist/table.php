
    <form action="" method="POST"> 
        <table align="center">
            <tr>
                <th><?php _e("<!--:ro-->Denumire<!--:--><!--:ru-->Название<!--:-->")?></th>
                <th><?php _e("<!--:ro-->Dimensiuni<!--:--><!--:ru-->Размеры<!--:-->")?></th>
                <th><?php _e("<!--:ro-->Unitate<!--:--><!--:ru-->Единица<!--:-->")?></th>
                <th><?php _e("<!--:ro-->Pret/Unitate(MDL)<!--:--><!--:ru-->Цена/Единица(Лей)<!--:-->")?></th>
                <th><?php _e("<!--:ro-->Cantitate<!--:--><!--:ru-->Количество<!--:-->")?></th>
                <th><?php _e("<!--:ro-->Pret Total<!--:--><!--:ru-->Общая цена<!--:-->")?></th>
            </tr>
<?php
$productTable = new PriceTable();
$productTable->getProducts();
foreach ($productTable->products as $product){
?>
            <tr>
                    <td><?=$product->name?></td>
                    <td><?=$product->dimension?></td>
                    <td><?=$product->unit?></td>
                    <td><?=$product->price?></td>
                    <td><input name="<?=$product->id?>" value=0 style="width:50px" type=text onchange="getPrice(this)" autocomplete='off'  maxlength=3 /></td>
                    <td class="pret-total">0</td>
            </tr>
<?php
}            
?>
            <tr class="bold">
            <td colspan = "4"></td>
            <td><?php _e("<!--:ro-->Pret Total<!--:--><!--:ru-->Общая стоимость<!--:-->")?></td>
            <td id = "total">0</td>
            </tr>
        </table>
        <input type="hidden" name="total" value="" id="total-input" >
        <input type="hidden" name="comand" value="1">
        <input type="submit" value="<?php _e("<!--:ro-->Trimite Cererea<!--:--><!--:ru-->Отправить<!--:-->")?>" />
    </form>
