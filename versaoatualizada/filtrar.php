<?php 
include ('conexao.php');
include 'protect.php';
if(isset($_POST['add_to_cart'])){
    $products_name = $_POST['product_name'];
    $products_price = $_POST['product_price'];
    $products_image = $_POST['product_image'];
    $product_type = $_POST['product_type'];
    $product_quantity=1;
    
    // select cart data based on condition
    $select_cart = mysqli_query($conn, "select * from `cart` where  name='$products_name'");
    if(mysqli_num_rows($select_cart) > 0){
        $display_message[]="Produto já etá no Carrinho";
    }else{
         // insert cart data in cart table 
    $insert_products=mysqli_query($conn, "insert into `cart` (name,price,image,type,quantity) values 
    ('$products_name','$products_price','$products_image','$product_type','$product_quantity') ");
    $display_message[]="Produto adicionado no Carrinho";
    }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro</title>
    <link rel="stylesheet" href="css/styleCarrinho">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php 
include('headerCarrinho.php');
?>

<div class="container">
    <!-- FILTRO -->
  
  <form action="">
    <input type="text" placeholder="Digite a Roupa" value="<?php if(isset($_GET['busca'])) echo $_GET['busca'] ?>" name="busca">
    <button type="submit">PESQUISAR</button>
</form>
  
    <?php
if(isset($display_message)){
  foreach($display_message as $display_message){
    echo "<div class='display_message'>
    <span>$display_message</span>
    <i class='fas fa-times' onClick='this.parentElement.style.display=`none`';></i>
    </div>";
  }
}

?>

            <section class="products">
            <!-- CONTAINER ONDE FICAM TODOS OS PRODUTOS -->

            <!-- FILTROS -->

<?php 
// se n tiver nada digitado, n vai aparecer nada 
if(!isset($_GET['busca'])){
    echo " ";
}else{
$pesquisa = $conn->real_escape_string($_GET['busca']);
// pesquisando na tabela produtos e vendo se o que foi escrito se parece com oque tem no banco
// a porcentagem significa que vai buscar qualquer coisa relacionada com o nome
$sql_code = "SELECT * FROM products WHERE name LIKE '%$pesquisa%' OR type LIKE '%$pesquisa%'";
$sql_query = $conn->query($sql_code);

if($sql_query->num_rows == 0){
    echo "nenhum resultado encontrado...";
}else{

while($dados = $sql_query->fetch_assoc()){

?>
<!-- DADOS ESTÃO APARECENDO AQUI -->
<form method="post" action="">

<li class="item">
         <div class="box">
           <div class="slide-img">
             <img src="produtos/<?php echo $dados['image']?>" alt="">
             <div class="overlay">
               <a href="produtoespecifico.php" class="buy-btn">Compre agora</a>
             </div>
           </div>
           <div class="detail-box">
             <div class="type">
             <a href="produtoespecifico.php"><?php echo $dados['name'] ?></a>
                    <div class="price"> <?php echo "R$ ".$dados['price'] ?></div>
               </a>
               <!-- <span>Perfeita para usar no verão</span> -->
             </div>
             <br>
             <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>           
           </div>
           <!-- CAMPOS OCULTOS QUE ESTÃO ARMAZENANDO OS DADOS PARA INSERIR NA TABELA CARRINHO PEGANDO DADOS DA TABELA PRODUTOS -->
            <input type="hidden" name="product_name" value="<?php echo $dados['name'] ?>">
                    <input type="hidden" name="product_price"  value="<?php echo $dados['price'] ?>">
                    <input type="hidden" name="product_image" value="<?php echo $dados['image']?>">
                    <input type="hidden" name="product_type" value="<?php echo $dados['type']?>">
                    <!-- precisa aumentar o tamanho do botão -->
                    <input type="submit"  class="submit_btn cart_btn" value="aaa ao Carrinho" name="add_to_cart" >
         </div>
       </li>
</form>


<?php
}
}
}
?>
                        <!-- FIM DO FILTRO -->             
            </div>
        </section>
    </div>

    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>