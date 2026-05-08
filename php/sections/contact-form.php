<?php
$contactSection = section_config([
    'titlePrefix' => 'Ready to',
    'titleHighlight' => 'see it in action?',
    'description' => 'Contact us today for a free demo and trial',
    'buttonText' => 'Submit',
    'fields' => [
        ['type' => 'text', 'placeholder' => 'First name*'],
        ['type' => 'text', 'placeholder' => 'Last name*'],
        ['type' => 'email', 'placeholder' => 'Email address*'],
        ['type' => 'tel', 'placeholder' => 'Phone number'],
    ],
    'messageField' => ['type' => 'text', 'placeholder' => 'Write your message'],
], $contactSection ?? null);
?>
<section class="contact-section">
  <div class="contact-container">
    <div class="contact-form-wrap">
      <div class="contact-heading">
        <h2 class="contact-title font-bold">
          <?php echo h($contactSection['titlePrefix']); ?>
          <span class="text-primary-blue"><?php echo h($contactSection['titleHighlight']); ?></span>
        </h2>
        <p class="contact-description font-normal"><?php echo h($contactSection['description']); ?></p>
      </div>

      <form class="contact-form-inner">
        <div class="contact-row">
          <div class="contact-field">
            <input type="<?php echo h($contactSection['fields'][0]['type']); ?>" placeholder="<?php echo h($contactSection['fields'][0]['placeholder']); ?>" class="contact-input">
          </div>
          <div class="contact-field">
            <input type="<?php echo h($contactSection['fields'][1]['type']); ?>" placeholder="<?php echo h($contactSection['fields'][1]['placeholder']); ?>" class="contact-input">
          </div>
        </div>

        <div class="contact-row">
          <div class="contact-field">
            <input type="<?php echo h($contactSection['fields'][2]['type']); ?>" placeholder="<?php echo h($contactSection['fields'][2]['placeholder']); ?>" class="contact-input">
          </div>
          <div class="contact-field">
            <input type="<?php echo h($contactSection['fields'][3]['type']); ?>" placeholder="<?php echo h($contactSection['fields'][3]['placeholder']); ?>" class="contact-input">
          </div>
        </div>

        <div class="contact-field contact-field-full">
          <input type="<?php echo h($contactSection['messageField']['type']); ?>" placeholder="<?php echo h($contactSection['messageField']['placeholder']); ?>" class="contact-input">
        </div>

        <button type="button" class="contact-submit font-medium">
          <?php echo h($contactSection['buttonText']); ?>
        </button>
      </form>
    </div>
  </div>
</section>
