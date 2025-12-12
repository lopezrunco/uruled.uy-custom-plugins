<?php
/**
 * Plugin Name: Force translations
 * Description: Overrides specific WooCommerce strings using the gettext filter.
 * Version: 1.0
 * Author: Creativo Multimedia
 */

add_filter('gettext', 'force_translations', 999, 3);

function force_translations($translated, $text, $domain) {
    $translated_strings = [
        'Your Cart'                 => 'Su carrito',
        'Checkout Details'          => 'Detalles de la compra',
        'Order Complete'            => 'Orden completa',
        'View Cart'                 => 'Ver carrito',
        'Checkout'                  => 'Comprar',
        'Type and hit enter …'      => '¿Qué busca?',
        'Refresh Cart'              => 'Actualizar',
        'No products in the cart.'  => 'El carrito está vacío',
        'Customer Details'          => 'Datos del cliente',
        'Phone:'                    => 'Teléfono',
        'Billing Address'           => 'Dirección de facturación',
    ];

    // If the text exists in the map, return the translation instead.
    if (isset($translated_strings[$text])) {
        return $translated_strings[$text];
    }

    return $translated;
}

