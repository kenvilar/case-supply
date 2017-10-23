<?php
/**
 * Template Name: FAQ
 */
get_header(); ?>

<section id="template-container" class="faq">
	<div class="container">
		<div class="row">
			<?php if ( have_rows( 'question_and_answer' ) ) : ?>
				<?php while ( have_rows( 'question_and_answer' ) ) : the_row();
					$question = get_sub_field( 'question' );
					$answer   = get_sub_field( 'answer' );
					?>
					<div class="col-md-offset-2 col-md-8 single-faq">
						<div class="question"><?php echo $question; ?></div>
						<div class="answer"><?php echo $answer; ?></div>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			<?php else : ?>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">Do I need an appointment?</div>
					<div class="answer">
						Case Supply is open for you to shop during our normal hours of operation. You do not need an
						appointment to come in and browse or when picking out a few items. An appointment is
						encouraged when planning a full kitchen or bath project. We have a number or qualified designers
						who would be glad to schedule a time that is convenient for you.
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">Do you offer in home design?</div>
					<div class="answer">
						Yes, Case Supply has professional designers who will come to your home and assist you with your
						design needs. This service is available at no charge but is usually done after a
						non-refundable deposit is received. We ask that when you visit our showroom you bring your
						measurements and ideas for your kitchen or bath; a preliminary design will follow, and then a
						field measurement and consultation at your home if needed.
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">Do you charge for design work?</div>
					<div class="answer">
						There is no charge for our design and sales service at Case Supply. Hand-drawn layouts, computer
						design work and quotes are the property of Case Supply and are not released
						until a non-refundable deposit is obtained for your project. If you need a layout, we will
						release a copy for a $250.00 fee. This charge will be applied to your order, once the order is
						placed.
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">Do you install?</div>
					<div class="answer">
						Case Supply has an installation division that caters specifically to the products that we sell.
						Installation services are performed only after an inspection of the job site to ascertain
						viability. Speak with a sales associate for details.
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">Do you charge for delivery?</div>
					<div class="answer">
						For our retail customers, there is a $99.00 per order delivery charge. Case offers a “tailgate”
						delivery service only. You must have the garage and driveway clear; our driver will
						put your order in the garage. The driver will not bring items into the house – no exceptions.
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">What is your return policy?</div>
					<div class="answer">
						No returns without authorization. Authorized returns are subject to a minimum 25% restocking
						fee. Electrical, special order and installed parts may not be returned.
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8 single-faq">
					<div class="question">Do you offer financing?</div>
					<div class="answer">Synchrony Bank</div>
				</div>
			<?php endif;
			wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
