
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
    $ids = array();
    $comand = array();
    $totalPrice = $_POST['total'];
    for($i=1; $i <= 10; $i++){
        if($_POST[$i]){
            $ids[] = $i;
            $comand[$i] = $_POST[$i]; 
        }
    }
    $comandTable = new PriceTable;
    $comandTable->getProducts($ids);
    $msg = "\n COMANDA \n Denumire | Dimensiuni | Unitate | Pret Unitate | Cantitate | Pret Total | \n";
    //print_r($comandTable->products);
    foreach ($comandTable->products as $product){
        
?>
            <tr>
                <td><?=$product->name?></td>
                <td><?=$product->dimension?></td>
                <td><?=$product->unit?></td>
                <td><?=$product->price?></td>
                <td><input name="<?=$product->id?>" value="<?=$comand[$product->id]?>" style="width:50px" type=text onchange="getPrice(this)" autocomplete='off'  maxlength=3 /></td>
                <td class="pret-total"><?=$product->price*$comand[$product->id]?></td>
            </tr>
<?php
        $msg .=  $product->name ." | ". $product->dimension ." | ". $product->unit ." | ". $product->price ." | ".$comand[$product->id] ." | ".$product->price*$comand[$product->id]."\n";
    }
    $msg .= "PREȚ TOTAL: $totalPrice \n"
?>
            <tr class="bold">
                <td colspan = "4"></td>
                <td><?php _e("<!--:ro-->Pret Total<!--:--><!--:ru-->Общая стоимость<!--:-->")?></td>
                <td id = "total"><?=$totalPrice?></td>
            </tr>
        </table>
    <form action="<?php echo site_url();?>/mail/" method="POST"> 
        <p><?php _e("<!--:ro-->Nume Prenume<!--:--><!--:ru-->Имя Фамилия<!--:-->")?></p>
        <input type="text" name="clientName" style="width:250px">
        <p><?php _e("<!--:ro-->Numărul de Telefon<!--:--><!--:ru-->Номер Телефона<!--:-->")?> *</p>
        <input type="text" name="clientPhone" style="width:250px" >
        <p>Email</p>
        <input type="text" name="clientMail" style="width:250px">
        <br>
            <p style="font-size: 10px;color: red;">* <?php _e("<!--:ro-->Cîmpuri obligatorii<!--:--><!--:ru-->Обязательные поля<!--:-->")?></p>
        <input type="hidden" name="msg" value="<?=$msg?>">
        <input type="hidden" name="mail" value="1">
        <input type="submit" value="<?php _e("<!--:ro-->Trimite Cererea<!--:--><!--:ru-->Отправить<!--:-->")?>" >
    </form>
