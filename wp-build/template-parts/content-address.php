<?php
// Custom Fields
$address		= get_field( 'contact_address' );
$email			= get_field( 'contact_email' );
$phone			= get_field( 'contact_phone' );
$contact_form	= get_field( 'contact_form' );

?>
<!-- Contact SECTION -->
<section id="contact" class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card p-4">
					<div class="card-body">
						<h4>Get in Touch</h4>
						<p>Got something interesting to say? You can find us:</p>
						<h4>Address</h4>
						<p><?php echo $address; ?></p>
						<h4>Email</h4>
						<p><?php echo $email; ?></p>
						<h4>Phone</h4>
						<p><?php echo $phone; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">Please fill out this form to contact us</h3>
						<hr>

						<?php echo $contact_form; ?></p>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
