<section class="cta-section" id="contact">
	<div class="cta-section__bg">
		<img src="assets/images/CTA.png" alt="" class="cta-section__bg-image" />
	</div>
	<div class="cta-section__container">
		<div class="cta-section__heading-block">
			<h2 class="cta-section__heading">Ready to <span class="text--blue">see it in action?</span></h2>
			<p class="cta-section__subtext">Contact us today for a free demo and trial</p>
		</div>

		<form class="contact-form" action="#" method="POST" novalidate>
			<div class="contact-form__fields">
				<div class="contact-form__row">
					<div class="contact-form__field">
						<label class="contact-form__label" for="first-name">First name<span
								class="contact-form__required">*</span></label>
						<input class="contact-form__input" type="text" id="first-name" name="first_name" required
							autocomplete="given-name" />
					</div>
					<div class="contact-form__field">
						<label class="contact-form__label" for="last-name">Last name<span
								class="contact-form__required">*</span></label>
						<input class="contact-form__input" type="text" id="last-name" name="last_name" required
							autocomplete="family-name" />
					</div>
				</div>
				<div class="contact-form__row">
					<div class="contact-form__field">
						<label class="contact-form__label" for="email">Email address<span
								class="contact-form__required">*</span></label>
						<input class="contact-form__input" type="email" id="email" name="email" required
							autocomplete="email" />
					</div>
					<div class="contact-form__field">
						<label class="contact-form__label" for="phone">Phone number</label>
						<input class="contact-form__input" type="tel" id="phone" name="phone" autocomplete="tel" />
					</div>
				</div>
				<div class="contact-form__field contact-form__field--full">
					<label class="contact-form__label" for="message">Write your message</label>
					<input class="contact-form__input" type="text" id="message" name="message" />
				</div>
			</div>
			<div class="contact-form__submit-wrap">
				<button class="btn btn--primary contact-form__submit" type="submit">Submit</button>
			</div>
		</form>
	</div>
</section>