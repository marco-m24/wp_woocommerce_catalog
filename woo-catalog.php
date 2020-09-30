// da aggiungere nel function del tema
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );



// da aggiungere in dashboard: Aspetto -> personalizza -> css aggiuntivo

.site-header-cart {
    display: none;
}
