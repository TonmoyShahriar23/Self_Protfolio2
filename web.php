<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// API Routes for Portfolio
Route::prefix('api')->group(function () {
    
    // Contact form submission
    Route::post('/contact', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Here you can save to database or send email
        // For now, we'll just return success response
        
        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! I will get back to you soon.',
            'data' => $request->all()
        ]);
    });

    // Get portfolio data
    Route::get('/portfolio', function () {
        return response()->json([
            'name' => 'Mostaque Shahriar Tonmoy',
            'title' => 'Competitive Programmer & Full Stack Developer',
            'email' => 'tonmoyshahriar792@gmail.com',
            'phone' => '+880 123 456 789',
            'location' => 'Rangpur, Bangladesh',
            'bio' => 'I am a passionate software engineer specialized in crafting efficient and scalable solutions. With a robust background in Full Stack Development and Competitive Programming, I deliver top-notch web applications that exceed client expectations.',
            'social_links' => [
                'github' => 'https://github.com/TonmoyShahriar23',
                'linkedin' => 'https://www.linkedin.com/in/tonmoy-shahriar-479a8730b/',
                'facebook' => 'https://www.facebook.com/tonmoy.shahriar.755437/',
                'leetcode' => 'https://leetcode.com/profile/'
            ]
        ]);
    });

    // Get skills data
    Route::get('/skills', function () {
        return response()->json([
            'programming_languages' => ['Python', 'JavaScript', 'Java', 'C++', 'TypeScript', 'SQL'],
            'web_development' => ['React', 'Node.js', 'HTML/CSS', 'MongoDB', 'Express.js', 'Tailwind CSS'],
            'machine_learning' => ['Scikit-learn', 'Prophet Model', 'OpenCV', 'NLP', 'TensorFlow', 'Pandas'],
            'data_analysis' => ['Power BI (Expert)', 'Excel', 'Data Visualization', 'Statistical Analysis']
        ]);
    });

    // Get projects data
    Route::get('/projects', function () {
        return response()->json([
            [
                'title' => 'Machine Learning Prediction Model',
                'description' => 'Built a predictive model using Python and Scikit-learn to forecast market trends with 85% accuracy.',
                'technologies' => ['Python', 'Scikit-learn', 'Pandas', 'NumPy'],
                'github' => 'https://github.com/TonmoyShahriar23',
                'demo' => '#'
            ],
            [
                'title' => 'Full Stack Web Application',
                'description' => 'Developed a complete web application with React frontend and Node.js backend, featuring user authentication and real-time updates.',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Express.js'],
                'github' => 'https://github.com/TonmoyShahriar23',
                'demo' => '#'
            ],
            [
                'title' => 'NLP Text Analysis Tool',
                'description' => 'Created a natural language processing tool for sentiment analysis and text classification using advanced NLP techniques.',
                'technologies' => ['Python', 'NLTK', 'TensorFlow', 'Flask'],
                'github' => 'https://github.com/TonmoyShahriar23',
                'demo' => '#'
            ]
        ]);
    });
});
