<?php

// Updated default placeholder for <select>
add_filter( 'wpcf7_form_elements', 'mc_base_wpcf7_select_update' );
function mc_base_wpcf7_select_update( $html ) {
	//wp_send_json($html );
	$text = '';
	$html = str_replace( '&#8212;Please choose an option&#8212;', $text, $html );

	return $html;
}

// MC ONLY VIA INIT BELOW
// Add script after form is initialized to prefill the contact reason based on the block's added "data-mc-form-select" attribute, using the actual dropdown text as the value.
function mc_base_contact_form_script() { ?>
	<script>


		// Updated hidden contact reason and who we email
		// 		const contactReasonRadio = document.querySelector('#contact-reason');
		// 		const contactReasonRadioHidden = document.querySelector('#contact-reason-hidden');
		// 		const notifyEmailsHidden = document.querySelector("#notify-emails-hidden");
		// 		const hiddenBottomHalf = document.querySelector('#form-bottom-half');
		// 		const hiddenContactDetails = document.querySelector('#conditional-contact-info');
		// 		const hiddenLoanAmount = document.querySelector('#loan-amount');
		//
		// 		function updateContactReason(radioItem) {
		// 			if (radioItem.checked) {
		// 				console.log("Selected radio button value:", radioItem.value);
		// 				// Used for demo conditional hiding
		// 				contactReasonRadioHidden.value = radioItem.value;
		//
		// 				// Show/hide fields
		// 				if (radioItem.value) {
		// 					hiddenBottomHalf.style.display = 'block';
		// 				} else {
		// 					hiddenBottomHalf.style.display = 'none';
		// 				}
		//
		// 				if (radioItem.value === 'Small Business Loans' || radioItem.value === 'Commercial Real Estate Loans' || radioItem.value === 'Impact Investments' || radioItem.value === 'Community Development Lending' || radioItem.value === 'Real Estate Training Initiatives' || radioItem.value === 'Small Business Advising Services') {
		// 					hiddenContactDetails.style.display = 'block';
		// 				} else {
		// 					hiddenContactDetails.style.display = 'none';
		// 				}
		//
		// 				if (radioItem.value === 'Small Business Loans') {
		// 					hiddenLoanAmount.style.display = 'block';
		// 				} else {
		// 					hiddenLoanAmount.style.display = 'none';
		// 				}
		//
		//
		// 				// Set email based on contact reason
		// 				if (radioItem.value === 'Small Business Loans') {
		// 					notifyEmailsHidden.value = 'slamping@cdcloans.com,kklein@cdcloans.com,webleads+sbloan@cdcloans.com';
		// 				} else if (radioItem.value === 'Commercial Real Estate Loans') {
		// 					notifyEmailsHidden.value = 'amort@cdcloans.com,webleads+commercial@cdcloans.com';
		// 				} else if (radioItem.value === 'I am a current borrower or applicant and have a question about my loan') {
		// 					notifyEmailsHidden.value = 'servicing@cdcloans.com, adepalma+servicing@capitalimpact.org';
		// 				} else if (radioItem.value === 'Impact Investments') {
		// 					notifyEmailsHidden.value = 'investments@momentuscap.org,webleads+impactinvestments@cdcloans.com';
		// 				} else if (radioItem.value === 'Other') {
		// 					notifyEmailsHidden.value = 'slamping+other@cdcloans.com,kklein+other@cdcloans.com,webleads+other@cdcloans.com';
		// 				} else {
		// 					notifyEmailsHidden.value = 'slamping+unselected@cdcloans.com,kklein+unselected@cdcloans.com,webleads+unselected@cdcloans.com';
		// 				}
		// 			};
		//
		// 		}

	</script>
<?php }

add_action( 'wpcf7_init', 'mc_wpcf7_init' );
function mc_wpcf7_init() {
	add_action( 'wp_footer', 'mc_base_contact_form_script' );
}
