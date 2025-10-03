<script>
// Smooth scroll to section on nav click (like admin.php)
document.querySelectorAll('.sidebar .menu-item').forEach(function(item) {
    item.addEventListener('click', function(e) {
        var id = this.getAttribute('href');
        if (id && id.startsWith('#')) {
            var section = document.querySelector(id);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });
});
</script>
<?php
// pages/menu-management-section.php
// Menu management section for admin panel
include_once __DIR__ . '/../server/menu.php';
$menu_items = get_menu_items(null, false);
$categories = ['appetizers' => 'Appetizers', 'mains' => 'Main Courses', 'desserts' => 'Desserts', 'drinks' => 'Drinks', 'specials' => "Chef's Specials"];
?>
<div class="section" id="menu-management">
    <h2>Menu Management</h2>
    <p>Yahan se aap restaurant ka menu manage kar sakte hain. (Feature coming soon!)</p>
    <div class="menu-management">
        <table class="menu-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Visibility</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($menu_items as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo htmlspecialchars($categories[$item['category']] ?? $item['category']); ?></td>
                    <td>₹<?php echo number_format($item['price'], 2); ?></td>
                    <td style="text-align:center;">
                        <label class="switch">
                            <input type="checkbox" class="menu-switch" data-id="<?php echo $item['id']; ?>" <?php if ($item['is_active']) echo 'checked'; ?> />
                            <span class="slider round"></span>
                        </label>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <style>
            .menu-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 24px;
                background: #fff;
                box-shadow: 0 2px 12px rgba(0,0,0,0.06);
                border-radius: 10px;
                overflow: hidden;
            }
            .menu-table th, .menu-table td {
                padding: 14px 18px;
                border-bottom: 1px solid #e0e0e0;
                text-align: left;
                font-size: 1rem;
            }
            .menu-table th {
                background: linear-gradient(90deg, #2d3e50 0%, #4e5d6c 100%);
                color: #fff;
                font-weight: 600;
                letter-spacing: 0.5px;
                border: none;
            }
            .menu-table tr:last-child td {
                border-bottom: none;
            }
            .menu-table tr:hover {
                background: #f3f7fa;
                transition: background 0.2s;
            }
            .switch {
                position: relative;
                display: inline-block;
                width: 48px;
                height: 26px;
                vertical-align: middle;
            }
            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }
            .slider {
                position: absolute;
                cursor: pointer;
                top: 0; left: 0; right: 0; bottom: 0;
                background-color: #cfd8dc;
                transition: .4s;
                border-radius: 26px;
                box-shadow: 0 1px 4px rgba(44,62,80,0.08);
            }
            .slider:before {
                position: absolute;
                content: "";
                height: 20px;
                width: 20px;
                left: 3px;
                bottom: 3px;
                background-color: #fff;
                transition: .4s;
                border-radius: 50%;
                box-shadow: 0 1px 4px rgba(44,62,80,0.10);
            }
            input:checked + .slider {
                background: linear-gradient(90deg, #27ae60 0%, #219150 100%);
            }
            input:checked + .slider:before {
                transform: translateX(22px);
            }
            /* Accessibility focus */
            .switch input:focus + .slider {
                box-shadow: 0 0 2px 2px #27ae60;
            }
        </style>
        <script>
        document.querySelectorAll('.menu-switch').forEach(function(sw) {
            sw.addEventListener('change', function() {
                fetch('../server/menu.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'toggle_id=' + this.dataset.id + '&toggle_on=' + (this.checked ? 1 : 0)
                }).then(r => r.text()).then(() => window.location.reload());
            });
        });
        </script>
    </div>
</div>
