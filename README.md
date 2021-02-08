# Groceries

This is a small project I am working on to keep track
of my groceries and help with meal planning.

My plan is to create a PHP backend using Laravel, with
Laravel Breeze helping to scaffold the frontend (I am using Breeze as I am new to Laravel - not making the jump to Jetstream). 
I will later need to set up Sanctum for its API token system, to use with the mobile app.

I am also planning to create an iPhone/iPad app using
Swift and Xcode (using SwiftUI instead of UIKit). This will hook into the Laravel API
allowing the data to be stored in my database.

I am (trying to) using [Conventional Commits 1.0.0](https://www.conventionalcommits.org/en/v1.0.0/) and [Semantic Versioning 2.0.0](https://semver.org).

## Roadmap

### Laravel App

Version | Description | Completion Status
------- | ----------- | -----------------
0.1 | Setup Laravel using Laravel Breeze to provide the framework and authentication | ✅
0.2 | The ability to add, edit and remove products | ❌
x | Create the Pantry to store the current quantities of groceries and allow for quantity manipulation | ❌
x | Add recipes to the system for all meals, so the app can check whether the required ingredients are in stock | ❌
x | Add a meal planner that can keep track of upcoming meals and determine which ingredients are missing/required | ❌
x | Automatically generate a shopping list based on the items required in the meal plan | ❌

Version 1.0.0 is what I consider as the complete version for my current vision. Although, I am sure I will add more stuff as I start using it.

### iOS/iPadOS App
I am currently focusing on creating the PHP app before moving on to the iOS app. Here are my initial thoughts:

Version | Description | Completion Status
------- | ----------- | -----------------
x | Display the Products list with item summaries | ❌
x | Allow for products to be added, altered and removed using the app | ❌
x | Display the Pantry list with item summaries | ❌
x | The ability to manipulate the pantry | ❌
x | Display the recipes list with a summary for each recipe including whether a recipe can currently be made | ❌
x | Add, edit and remove recipes | ❌
x | Add the meal planner | ❌
x | Add the shopping list | ❌
