<link rel="stylesheet" href="./css/universal.css">

    <style>
        body {
            background-color: #f9f9f9;
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .menu-hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            animation: fadeIn 1s ease;
        }

        .menu-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .menu-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: #d35400;
        }

        /* Menu Filter */
        .menu-filter {
            padding: 40px 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .filter-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-btn {
            background: white;
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: white;
        }

        /* Menu Section */
        .menu-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }

        .menu-category {
            margin-bottom: 60px;
            animation: fadeInUp 0.8s ease;
        }

        .category-title {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent);
            display: inline-block;
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .menu-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .item-image {
            width: 190px;
            height: 120px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .item-content {
            padding: 20px;
            flex: 1;
        }

        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2px;
        }

        .item-title {
            font-size: 1.3rem;
            color: var(--primary);
            margin-right: 4px;
        }

        .item-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--accent);
            white-space: nowrap;
        }

        .item-description {
            color: var(--text-light);
            margin-bottom: 15px;
        }

        .item-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .item-tag {
            background: var(--light);
            color: var(--secondary);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .item-tag.vegetarian {
            background: #e8f6f3;
            color: #27ae60;
        }

        .item-tag.spicy {
            background: #fdedec;
            color: #e74c3c;
        }

        .item-tag.gluten-free {
            background: #fef9e7;
            color: #f39c12;
        }

        /* Special Items */
        .special-item {
            grid-column: span 2;
            position: relative;
        }

        .special-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            z-index: 2;
        }

        /* Dietary Icons */
        .dietary-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .dietary-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            color: white;
        }

        .dietary-icon.vegetarian {
            background: #27ae60;
        }

        .dietary-icon.spicy {
            background: #e74c3c;
        }

        .dietary-icon.gluten-free {
            background: #f39c12;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Table Styles */
        .menu-table-view { width:100%; border-collapse:collapse; margin-bottom:48px; }
        .menu-table-view th, .menu-table-view td { padding:18px 20px; border-bottom:1px solid #eaeaea; text-align:left; }
        .menu-table-view th { background:#f8f8f8; color:var(--primary); font-size:1.1rem; font-weight:600; }
        .menu-table-view tr:last-child td { border-bottom:none; }
        .menu-table-img { width:70px; height:48px; object-fit:cover; border-radius:8px; box-shadow:0 2px 8px #0001; }
        .menu-table-title { color:var(--primary); font-weight:600; font-size:1.1rem; }
        .menu-table-price { color:var(--accent); font-weight:700; font-size:1.1rem; }
        .menu-table-desc { color:var(--text-light); font-size:0.98rem; }
        .menu-table-category { color:#fff; background:var(--primary); border-radius:6px; padding:4px 14px; font-size:0.95rem; font-weight:500; display:inline-block; }

        /* Responsive Styles */
        @media (max-width: 768px) {
            
            nav ul {
                margin-top: 20px;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 10px;
            }
            
            .menu-hero h1 {
                font-size: 2.5rem;
            }
            
            .menu-items {
                grid-template-columns: 1fr;
            }
            
            .special-item {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
    <div class="page">
    <section class="menu-hero">
        <div class="container">
            <h1>Our Menu</h1>
            <p>See our tasty food and drinks, made with fresh ingredients and lots of care.</p>
            <a href="reservations.html" class="btn">Book a Table</a>
        </div>
    </section>

    <section class="menu-filter">
        <div class="container">
            <div class="filter-container">
                <button class="filter-btn active" data-filter="all">All Menu</button>
                <button class="filter-btn" data-filter="appetizers">Appetizers</button>
                <button class="filter-btn" data-filter="mains">Main Courses</button>
                <button class="filter-btn" data-filter="desserts">Desserts</button>
                <button class="filter-btn" data-filter="drinks">Drinks</button>
                <button class="filter-btn" data-filter="specials">Chef's Specials</button>
            </div>
        </div>
    </section>

    <section class="menu-section">
        <div class="container">
            <div class="section-title">
                <h2>What We Serve</h2>
            </div>
            <?php
            include_once __DIR__ . '/../server/menu.php';
            $categories = [
                'appetizers' => 'Starters',
                'mains' => 'Main Dishes',
                'desserts' => 'Sweets',
                'drinks' => 'Drinks',
                'specials' => "Chef's Specials"
            ];
            $menu_items = get_menu_items(null, true);
            $grouped = [];
            foreach ($menu_items as $item) {
                $grouped[$item['category']][] = $item;
            }
            foreach ($categories as $cat_key => $cat_label):
                if (!empty($grouped[$cat_key])):
            ?>
            <div class="menu-category" data-category="<?php echo $cat_key; ?>">
                <h3 class="category-title"><?php echo $cat_label; ?></h3>
                <div class="menu-items">
                    <?php foreach ($grouped[$cat_key] as $item): ?>
                    <div class="menu-item<?php if (strpos($item['tags'], 'special') !== false) echo ' special-item'; ?>">
                        <?php if (strpos($item['tags'], 'special') !== false): ?>
                        <div class="special-badge">Chef's Special</div>
                        <?php endif; ?>
                        <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title"><?php echo htmlspecialchars($item['name']); ?></h4>
                                <span class="item-price">₹<?php echo number_format($item['price'], 2); ?></span>
                            </div>
                            <p class="item-description"><?php echo htmlspecialchars($item['description']); ?></p>
                            <div class="item-tags">
                                <?php if (strpos($item['tags'], 'vegetarian') !== false): ?><span class="item-tag vegetarian">Vegetarian</span><?php endif; ?>
                                <?php if (strpos($item['tags'], 'spicy') !== false): ?><span class="item-tag spicy">Spicy</span><?php endif; ?>
                                <?php if (strpos($item['tags'], 'gluten-free') !== false): ?><span class="item-tag gluten-free">Gluten-Free</span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </section>

    <!-- Removed duplicate table-style menu section -->
</div>
    <script>
        // Menu filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const menuCategories = document.querySelectorAll('.menu-category');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Show/hide menu categories based on filter
                    menuCategories.forEach(category => {
                        if (filterValue === 'all' || category.getAttribute('data-category') === filterValue) {
                            category.style.display = 'block';
                            // Add animation
                            category.style.animation = 'fadeInUp 0.8s ease';
                        } else {
                            category.style.display = 'none';
                        }
                    });
                    
                    // Special handling for specials filter
                    if (filterValue === 'specials') {
                        menuCategories.forEach(category => {
                            const hasSpecials = category.querySelector('.special-item');
                            if (hasSpecials) {
                                category.style.display = 'block';
                                // Hide non-special items
                                const allItems = category.querySelectorAll('.menu-item');
                                allItems.forEach(item => {
                                    if (item.classList.contains('special-item')) {
                                        item.style.display = 'flex';
                                    } else {
                                        item.style.display = 'none';
                                    }
                                });
                            } else {
                                category.style.display = 'none';
                            }
                        });
                    } else if (filterValue !== 'all') {
                        // Show all items in the filtered category
                        menuCategories.forEach(category => {
                            if (category.getAttribute('data-category') === filterValue) {
                                const allItems = category.querySelectorAll('.menu-item');
                                allItems.forEach(item => {
                                    item.style.display = 'flex';
                                });
                            }
                        });
                    } else {
                        // Show all items when "all" is selected
                        menuCategories.forEach(category => {
                            const allItems = category.querySelectorAll('.menu-item');
                            allItems.forEach(item => {
                                item.style.display = 'flex';
                            });
                        });
                    }
                });
            });
        });
    </script>