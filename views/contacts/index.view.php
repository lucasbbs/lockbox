<?php $validations = flash()->get('validations'); ?>

<div class="bg-base-300 rounded-l-box w-56 flex flex-col divide-y divide-gray-700 overflow-hidden">
  <?php require base_path('views/partials/_alphabet.view.php'); ?>
</div>

<div class="bg-base-200 rounded-r-box w-full p-10 flex flex-col space-y-6">
  <form action="/contacts" method="POST" id="form-update">
    <input type="hidden" name="__method" value="PUT" />

    <input type="hidden" name="id" value="<?= htmlspecialchars((string) $selectedContact->id, ENT_QUOTES, 'UTF-8') ?>" />

    <fieldset class="fieldset">
      <legend class="fieldset-legend">Name</legend>
      <input type="text" class="input w-full" value="<?= htmlspecialchars((string) $selectedContact->name, ENT_QUOTES, 'UTF-8') ?>" name="name" />

      <?php if (isset($validations['name'])): ?>
        <div class="mt-1 text-xs text-error"><?= $validations['name'][0] ?></div>
      <?php endif; ?>
    </fieldset>

    <fieldset class="fieldset">
      <legend class="fieldset-legend">Phone number</legend>
      <input
        <?php if (! session()->get('show')): ?>
        disabled
        <?php endif; ?>
        type="text"
        class="input w-full"
        name="phone"
        placeholder="Phone number"
        value="<?= htmlspecialchars((string) $selectedContact->phone(), ENT_QUOTES, 'UTF-8') ?>" />

      <?php if (isset($validations['phone'])): ?>
        <div class="mt-1 text-xs text-error"><?= $validations['phone'][0] ?></div>
      <?php endif; ?>
    </fieldset>

    <fieldset class="fieldset">
      <legend class="fieldset-legend">Email</legend>
      <input
        <?php if (! session()->get('show')): ?>
        disabled
        <?php endif; ?>
        type="email"
        class="input w-full"
        name="email"
        placeholder="Email"
        value="<?= htmlspecialchars((string) $selectedContact->email(), ENT_QUOTES, 'UTF-8') ?>" />

      <?php if (isset($validations['email'])): ?>
        <div class="mt-1 text-xs text-error"><?= $validations['email'][0] ?></div>
      <?php endif; ?>
    </fieldset>

    <fieldset class="fieldset">
      <legend class="fieldset-legend">Address</legend>
      <textarea
        <?php if (! session()->get('show')): ?>
        disabled
        <?php endif; ?>
        class="textarea h-24 w-full"
        name="address"
        placeholder="Address"><?= htmlspecialchars((string) $selectedContact->address(), ENT_QUOTES, 'UTF-8') ?></textarea>

      <?php if (isset($validations['address'])): ?>
        <div class="mt-1 text-xs text-error"><?= $validations['address'][0] ?></div>
      <?php endif; ?>
    </fieldset>
  </form>

  <div class="flex justify-between items-center">
    <form action="/contacts" method="POST">
      <input type="hidden" name="__method" value="DELETE" />
      <input type="hidden" name="id" value="<?= htmlspecialchars((string) $selectedContact->id, ENT_QUOTES, 'UTF-8') ?>" />
      <button class="btn btn-error" type="submit">Delete</button>
    </form>
    <button class="btn btn-primary" type="submit" form="form-update">Update</button>
  </div>
</div>
