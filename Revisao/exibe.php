<?php
switch ($_GET['categoria']) {
    case  0 ;
        print  " Tapioca, Sorvete, Gibi ";
    break;
    case  1 ;
        print  " Misto Quente, Torta de Frango, Pão de Queiro ";
    break;
    case  2 ;
        print  " Cappuccino, Café, Chocolate Quente ";
    break;
    case  3 ;
        print  " Coca-cola, água, milk-shake ";
    break;
}

print_r ($_GET['categoria']);
?>