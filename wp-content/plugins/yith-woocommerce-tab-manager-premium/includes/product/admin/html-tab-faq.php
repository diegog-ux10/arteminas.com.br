<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<tr>
	<td class="sort"></td>
	<td class="file_name"><input type="text" class="input_text" placeholder="<?php esc_attr_e( 'Add a question here', 'yith-woocommerce-tab-manager' ); ?>" name="<?php echo esc_attr( $field_name ) . '[faq_questions][]'; ?>" value="<?php echo esc_attr( $faq['question'] ); ?>" /></td>
	<td class="file_url"><input type="text" class="input_text" placeholder="<?php esc_attr_e( 'Add an answer here', 'yith-woocommerce-tab-manager' ); ?>" name="<?php echo esc_attr( $field_name ) . '[faq_answers][]'; ?>" value="<?php echo esc_attr( $faq['answer'] ); ?>" /></td>
	<td width="1%"><a href="#" class="delete"><?php esc_html_e( 'Delete', 'yith-woocommerce-tab-manager' ); ?></a></td>
</tr>
