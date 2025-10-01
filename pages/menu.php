
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #e67e22;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #7f8c8d;
            --success: #27ae60;
        }

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
            width: 120px;
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
            margin-bottom: 10px;
        }

        .item-title {
            font-size: 1.3rem;
            color: var(--primary);
            margin-right: 10px;
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
    <section class="menu-hero">
        <div class="container">
            <h1>Our Exquisite Menu</h1>
            <p>Discover our carefully crafted dishes made with the finest ingredients and culinary expertise</p>
            <a href="reservations.html" class="btn">Make a Reservation</a>
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
                <h2>Our Culinary Offerings</h2>
            </div>

            <!-- Appetizers -->
            <div class="menu-category" data-category="appetizers">
                <h3 class="category-title">Appetizers</h3>
                <div class="menu-items">
                    <div class="menu-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/2014_Bruschetta_The_Larder_Chiang_Mai.jpg/1200px-2014_Bruschetta_The_Larder_Chiang_Mai.jpg" alt="Bruschetta" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Tomato Bruschetta</h4>
                                <span class="item-price">$12</span>
                            </div>
                            <p class="item-description">Toasted bread topped with fresh tomatoes, basil, garlic, and extra virgin olive oil</p>
                            <div class="item-tags">
                                <span class="item-tag vegetarian">Vegetarian</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Calamari" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Crispy Calamari</h4>
                                <span class="item-price">$16</span>
                            </div>
                            <p class="item-description">Tender squid rings lightly battered and fried, served with lemon aioli</p>
                            <div class="item-tags">
                                <span class="item-tag">Seafood</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2Farchive%2F3b432b41ce04c96a08d77befa42b9881a587a436" alt="Caprese Salad" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Caprese Salad</h4>
                                <span class="item-price">$14</span>
                            </div>
                            <p class="item-description">Fresh mozzarella, tomatoes, and basil drizzled with balsamic glaze</p>
                            <div class="item-tags">
                                <span class="item-tag vegetarian">Vegetarian</span>
                                <span class="item-tag gluten-free">Gluten Free</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Courses -->
            <div class="menu-category" data-category="mains">
                <h3 class="category-title">Main Courses</h3>
                <div class="menu-items">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Filet Mignon" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Filet Mignon</h4>
                                <span class="item-price">$38</span>
                            </div>
                            <p class="item-description">8oz tender beef filet with red wine reduction, served with garlic mashed potatoes and seasonal vegetables</p>
                            <div class="item-tags">
                                <span class="item-tag gluten-free">Gluten Free</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1080&q=80" alt="Salmon" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Pan-Seared Salmon</h4>
                                <span class="item-price">$32</span>
                            </div>
                            <p class="item-description">Atlantic salmon with lemon butter sauce, served with asparagus and wild rice</p>
                            <div class="item-tags">
                                <span class="item-tag">Seafood</span>
                                <span class="item-tag gluten-free">Gluten Free</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item special-item">
                        <div class="special-badge">Chef's Special</div>
                        <img src="https://inkristaskitchen.com/wp-content/uploads/2022/02/mushroom-truffle-pasta-10-1.jpg" alt="Pasta" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Truffle Mushroom Pasta</h4>
                                <span class="item-price">$26</span>
                            </div>
                            <p class="item-description">Handmade fettuccine with wild mushrooms, black truffle, and parmesan cream sauce</p>
                            <div class="item-tags">
                                <span class="item-tag vegetarian">Vegetarian</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desserts -->
            <div class="menu-category" data-category="desserts">
                <h3 class="category-title">Desserts</h3>
                <div class="menu-items">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80" alt="Chocolate Cake" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Chocolate Lava Cake</h4>
                                <span class="item-price">$10</span>
                            </div>
                            <p class="item-description">Warm chocolate cake with a molten center, served with vanilla ice cream</p>
                            <div class="item-tags">
                                <span class="item-tag">Contains Nuts</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1116&q=80" alt="Cheesecake" class="item-image">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">New York Cheesecake</h4>
                                <span class="item-price">$9</span>
                            </div>
                            <p class="item-description">Classic creamy cheesecake with berry compote and whipped cream</p>
                            <div class="item-tags">
                                <span class="item-tag gluten-free">Gluten Free</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Drinks -->
            <div class="menu-category" data-category="drinks">
                <h3 class="category-title">Beverages</h3>
                <div class="menu-items">
                    <div class="menu-item">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">House Red Wine</h4>
                                <span class="item-price">$9/glass</span>
                            </div>
                            <p class="item-description">Our selection of premium red wines from local vineyards</p>
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Craft Cocktails</h4>
                                <span class="item-price">$14</span>
                            </div>
                            <p class="item-description">Handcrafted cocktails using premium spirits and fresh ingredients</p>
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-content">
                            <div class="item-header">
                                <h4 class="item-title">Fresh Juices</h4>
                                <span class="item-price">$6</span>
                            </div>
                            <p class="item-description">Seasonal selection of freshly squeezed juices</p>
                            <div class="item-tags">
                                <span class="item-tag">Non-Alcoholic</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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