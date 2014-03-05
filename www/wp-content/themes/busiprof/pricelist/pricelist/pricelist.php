<div class="_price_wraper">    
<?php
if(isset($_GET['s'])){
    $s = $_GET['s'];
    if($s == 0){
        echo "<h2 style='color:red;'>Eroare! Nu ați introdus numărul de telefon!</h2>";
    }
    if($s == 1){
        echo "<h2 style='color:green;'>Succes! Comanda dvs a fost trimisă!</h2>";
    }
    if($s == 2){
        echo "<h2 style='color:red;'>Eroare! Comanda nu a putut fi trimisă! <a href=".get_permalink(36).">Contactaține direct.</a></h2>";
    }
}

?>
<?php if($_SERVER['REQUEST_METHOD']=='POST'):?>
<?php require($template_directory . '/core/includes/pricelist/comand.php')?>    
<?php else: ?>
<?php require($template_directory . '/core/includes/pricelist/table.php')?>
<?php endif;?>
</div>
<script type="text/javascript">
    function getPrice(input) {
                            if(parseFloat(input.value)){
                                    var price = parseFloat(input.parentNode.previousSibling.previousSibling.textContent).toFixed(2) * parseFloat(input.value).toFixed(2);
                            }else{
                                    var price = 0;
                                    }
                            input.parentNode.nextSibling.nextSibling.innerHTML=parseFloat(price).toFixed(2);
                            var counter = 0;
                            var prices = document.getElementsByClassName('pret-total');
                            var sum = 0;
                            while(prices.length > counter){
                                            sum += parseFloat(prices[counter].textContent);
                                            counter++;
                                    }
                            document.getElementById('total').innerHTML = parseFloat(sum).toFixed(2);
                            document.getElementById('total-input').value = parseFloat(sum).toFixed(2);
                    
            }
</script>