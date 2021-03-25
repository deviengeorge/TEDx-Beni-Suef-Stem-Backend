<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            "created_at" => "20 Oct 2020",
            "title" => "TEDxYouth@Beni-SuefSTEM Vision & Mission",
            "content" => "#### TEDx is a grassroots initiative, created in the spirit of TED’s overall mission to research and discover “ideas worth spreading.” TEDx brings the spirit of TED to local communities around the globe through TEDx events. These events are organized by passionate individuals who seek to uncover new ideas and to share the latest research in their local areas that spark conversations in their communities. TEDx events include live speakers and recorded TED Talks, and are organized independently under a license granted by TED.\n## **TEDxYouth@Beni-SuefSTEM Vision & Mission**:\n#### Vision: \n> TEDxYouth@Beni-SuefSTEM aims to spot the light on the idea and the concept of overcoming the tough times and convert them into a huge success. In addition, spread and discuss the ideas of our local STEM community, which includes hundreds of students with bright minds. We plan to spread practical steps for success, to rise with our people, community, and our lovely country, Egypt. \n#### Mission: \n> To spread knowledge and outstanding ideas through organizing our TEDxYouth@Beni-SuefSTEM event, in which our speakers will cover discipline topics, and share their stories from the deeps of struggling to the massive success. Moreover, to widen the youth horizons and establish the principle of self-learning through introducing live examples, solutions, and the way of applying them to our community.",
            "author" => "TEDx Youth BS",
            "image" => "https://res.cloudinary.com/dxaqlmgag/image/upload/v1613850700/vision_mission.jpg",
            "facebook_post" => "https://facebook.com/story.php?story_fbid=102317931674990&id=100148515225265",
        ]);

        Post::create([
            "created_at" => "22 Oct 2020",
            "title" => "What is the difference between TED and TEDx?",
            "facebook_post" => "https://facebook.com/story.php?story_fbid=104240638149386&id=100148515225265",
            "author" => "TEDx Youth BS",
            "content" => "##### So as to answer, TED is a conference that started in 1984 and stands for Technology, Entertainment, and Design. TED held an annual event to bring together the world's leading thinkers and influencers to share ideas that matter in any discipline, for example, in technology, entertainment, design, science, humanities, business, and development … etc. It has always been exclusive and expensive, and until July of 2006, zero TED Talks had ever been released to the public. After that date, just six TED talks were posted online, and they made an enormous impact as they were such a hit, which provided a numerous worldwide audience who adored the ideas shared on the TED.\n##### After just a few years, people all around the world were seeking to have something like the TED conference, but in their local community. They wanted to feature their local leaders, share ideas relevant to their geographic local, and have regional thought leaders converge on one event that does not cost too much money. Afterward, TEDx was born, as in 2009, anyone around the world could apply for a free license to produce a TED-like event in their city.\n> In summary, the difference between TED and TEDx events is that the former takes more of a global approach while the latter typically focuses on a local community that concentrates on local voices. “Officially, the \"x\" in TEDx stands for independently organized TED event”.",
            "image" => "https://res.cloudinary.com/dxaqlmgag/image/upload/v1613850865/ted_VS_tedx.jpg"
        ]);

        Post::create([
            "created_at" => "29 Jan 2021",
            "title" => "Change Your Perspective",
            "facebook_post" => "https://www.facebook.com/story.php?story_fbid=184803306759785&id=100148515225265",
            "author" => "TEDx Youth BS",
            "content" => "#### A person's perspective on the way he sees the life and its difficulties should be changed. Lowri Dowthwaite, a psychologist at the University of Central Lancashire, says that hardships make our lives feel valuable.\n#### Various researches state that experiencing adversity can be good for us, depending on the way we respond to it. Studies have proved that the way we respond to the circumstances of our lives has more effect on us than the events themselves. Experiencing stress, sadness and anxiety in the short term doesn't mean we can't be happy in the long term. Bearing distresses make us more flexible and lead us to take actions in our lives, such as starting our delayed businesses and works.\n#### As a tip, try to stop the negative thoughts and emotions at least for a day; pause for a moment in order to observe mistakes and reconsider things. A change in routine habits will get you out of your comfort zone, pushing you to finish the incomplete agenda. learning new skills breathes confidence in ourselves, which pushes us through tough times in life. Therefore, we would be able to face bigger difficulties.",
            "image" => "https://res.cloudinary.com/dxaqlmgag/image/upload/v1613850848/change_now.jpg"
        ]);

        Post::create([
            "created_at" => "12 Fab 2021",
            "facebook_post" => "https://www.facebook.com/story.php?story_fbid=194050509168398&id=100148515225265",
            "title" => "Our Training On YouTube",
            "author" => "TEDx Youth BS",
            "content" => "### Our training has been published on YouTube!!\n### We hare delighted to announce that our seasoned board prepared serieses of videos as a training in different fields; HR, PR, FR, Coaching, CW, and SM. We hope you get benefited from.\n### Don't forget to subscribe to out channel !!!\n[Youtube Channel](https://youtube.com/channel/UCA-y2ItuAJGsWnlo1egpLtw)",
            "image" => "https://res.cloudinary.com/dxaqlmgag/image/upload/v1613850996/channel.jpg"
        ]);
    }
}
