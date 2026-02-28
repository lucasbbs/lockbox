    <div class="flex space-x-4">
      <form action="/contacts" class="w-full">
        <label class="input input-bordered flex items-center gap-2 w-full">
          <input
            type="text" class="grow" name="search" placeholder="Search contacts in Lock Box..." value="<?= request()->get('search') ?>" />
          <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g
              stroke-linejoin="round"
              stroke-linecap="round"
              stroke-width="2.5"
              fill="none"
              stroke="currentColor">
              <circle cx="11" cy="11" r="8"></circle>
              <path d="m21 21-4.3-4.3"></path>
            </g>
          </svg>
        </label>
      </form>

      <!-- <a href="/contacts/create" class="btn btn-primary">+ item</a> -->
      <?php partial('partials/_modal', [
        'id' => 'my_modal_1',
        'title' => 'Create Contact',
        'trigger' => '+ item',
      ], function () { ?>
        <?php partial('partials/_create_form'); ?>
      <?php }); ?>

    </div>