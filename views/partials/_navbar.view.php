<div class="navbar bg-base-100 shadow-sm">
  <div class="flex-1">
    <a href="/contacts" class="btn btn-ghost text-xl">Lock Box</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      <li>
        <?php if (session()->get('show')): ?>
          <a href="/hide">
            <img src="/images/lock_opened.svg" width="15">
          </a>
        <?php else: ?>
          <a href="/confirm">
            <img src="/images/lock_closed.svg" width="15">
          </a>
        <?php endif; ?>
      </li>
      <li>
        <details>
          <summary><?= auth()->name ?></summary>
          <ul class="bg-base-100 rounded-t-none p-2">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</div>