</div>




<script type="text/javascript">
  /*
   const buttonRight = document.getElementById('slideRight');
      const buttonLeft = document.getElementById('slideLeft');
  
      buttonRight.onclick = function () {
        document.getElementById('codehap_container').scrollLeft += 250;
      };
      buttonLeft.onclick = function () {
        document.getElementById('codehap_container').scrollLeft -= 250;
      };
  
  */


  var button = document.getElementById('slideRight');
  button.onclick = function () {
    var container = document.getElementById('codehap_container');
    sideScroll(container, 'right', 30, 250, 10);
  };

  var back = document.getElementById('slideLeft');
  back.onclick = function () {
    var container = document.getElementById('codehap_container');
    sideScroll(container, 'left', 30, 250, 10);
  };

  function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function () {
      if (direction == 'left') {
        element.scrollLeft -= step;
      } else {
        element.scrollLeft += step;
      }
      scrollAmount += step;
      if (scrollAmount >= distance) {
        window.clearInterval(slideTimer);
      }
    }, speed);
  }


</script>











<?php
//  if (file_exists("ads_/5.txt")){
//     include'ads/5.php';
// }  
?>


<div class="container-fluid p-3">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          
          <h4>What is Twitter Trending</h4>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Twitter Trending is a dynamic platform that aggregates real-time data from Twitter, showcasing the most
          popular and relevant topics currently making waves across the social media landscape. It serves as a
          comprehensive dashboard, offering users an instant snapshot of the most talked-about subjects, both globally
          and locally. By harnessing sophisticated algorithms, Twitter Trending sifts through millions of tweets to
          highlight trends, hashtags, and discussions that are capturing the attention of users worldwide.

          This innovative tool empowers users to stay informed and engaged with the pulse of the internet, providing
          insights into a diverse array of subjects spanning politics, entertainment, sports, culture, and more. Whether
          it's breaking news, viral memes, or emerging conversations, Twitter Trending delivers a curated feed of
          trending topics tailored to individual interests and preferences.

          Beyond mere observation, Twitter Trending enables users to actively participate in conversations, join
          discussions, and contribute their perspectives to the global dialogue. Businesses and influencers can leverage
          trending topics to enhance their marketing strategies, amplify their brand presence, and connect with their
          target audience in a meaningful way.

          In essence, Twitter Trending serves as a vital tool for navigating the ever-changing landscape of social
          media, offering users the opportunity to discover, engage, and stay ahead of the curve in an increasingly
          interconnected world.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
          aria-expanded="false" aria-controls="collapseTwo">
          <h4>How Twitter Trending Works</h4>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Twitter Trending operates by continuously analyzing the vast stream of data flowing through the Twitter
          platform in real-time. The process begins with the collection of data from tweets posted by users worldwide.
          This includes various types of content such as text, hashtags, images, links, and other metadata associated
          with each tweet. Once collected, sophisticated algorithms come into play, sifting through the data to identify
          patterns, trends, and topics that are gaining significant traction among Twitter users.

          These algorithms consider various factors such as the frequency of mentions, engagement levels, and sudden
          spikes in activity to determine which topics are trending. The system also localizes trends, tailoring them
          based on geographical locations. This means users can see what topics are trending globally, as well as in
          specific countries, regions, or cities. Localization ensures that users receive relevant and personalized
          trending topics based on their location and interests.

          Once trending topics are identified and localized, they are ranked based on their popularity and relevance.
          Topics with the highest levels of engagement and activity are typically featured more prominently. These
          trending topics are then presented to users through the Twitter Trending interface, which may include a
          dedicated section on the Twitter website or app. Users can explore these topics, click on hashtags to view
          related tweets, and join conversations around trending subjects.

          Twitter Trending continuously updates its list of trending topics as new data comes in. This ensures that
          users have access to the most up-to-date and relevant information at all times. In summary, Twitter Trending
          works by analyzing real-time data from Twitter, identifying trending topics using advanced algorithms, and
          presenting these topics to users in a localized and personalized manner. This enables users to stay informed
          and engaged with the latest conversations and trends on the platform.
        </div>
      </div>
    </div>






    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h4>Benefits of Twitter Trend</h4>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>Twitter Trend offers a plethora of benefits to users, ranging from staying informed about the latest
            happenings to fostering meaningful connections with like-minded individuals. Here are seven key advantages
            of using Twitter Trend:</p>
          <ul>
            <li><strong>Real-time Insights:</strong> Stay updated with the most current news, events, and discussions as
              they unfold in real-time across the Twitter platform.</li>
            <li><strong>Global Perspective:</strong> Gain access to trending topics not only from your local area but
              also from around the globe, broadening your understanding of diverse perspectives and trends.</li>
            <li><strong>Personalized Experience:</strong> Customize your trending feed based on your interests and
              preferences, ensuring that you receive content tailored specifically to your tastes.</li>
            <li><strong>Engagement Opportunities:</strong> Participate in vibrant discussions and engage with trending
              topics, allowing you to share your opinions, connect with others, and contribute to the global
              conversation.</li>
            <li><strong>Business Intelligence:</strong> For businesses and marketers, Twitter Trend provides valuable
              insights into consumer preferences, market trends, and competitor activities, enabling informed
              decision-making and strategic planning.</li>
            <li><strong>Brand Visibility:</strong> Leverage trending topics to enhance your brand's visibility and
              engagement, reaching a wider audience and driving traffic to your Twitter profile or website.</li>
            <li><strong>Community Building:</strong> Join millions of users in a dynamic community, where you can
              connect with influencers, thought leaders, and enthusiasts who share your interests, fostering connections
              and building relationships that extend beyond the digital realm.</li>
          </ul>
          <p>In essence, Twitter Trend offers a multifaceted platform that not only keeps you informed but also empowers
            you to engage, connect, and thrive in the fast-paced world of social media.</p>
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
          <h4>What things to keep in mind while choosing the Twitter trend</h4>
        </button>
      </h2>
      <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          When choosing Twitter trends to engage with or leverage, several factors should be considered to ensure
          relevance, authenticity, and effectiveness.

          Firstly, it's crucial to assess the credibility and source of the trend. Verify if the trend originates from
          authentic accounts, reputable sources, or official handles. Avoid spreading misinformation or engaging with
          trends that may be based on false or misleading information.

          Secondly, consider the context and sentiment surrounding the trend. Evaluate whether the trend aligns with
          your values, brand identity, or target audience's interests. Analyze the tone and sentiment of conversations
          related to the trend to determine if it's appropriate and conducive to positive engagement.

          Furthermore, assess the longevity and sustainability of the trend. Some trends may have fleeting popularity
          and may not be relevant or meaningful in the long term. Prioritize trends that have the potential to maintain
          momentum and resonate with your audience over time.

          Additionally, consider the potential impact and implications of participating in the trend. Evaluate how your
          engagement with the trend may be perceived by your audience and stakeholders. Ensure that your participation
          adds value, contributes positively to the conversation, and aligns with your brand's image and objectives.

          Moreover, monitor the visibility and virality of the trend. Assess the volume of engagement, the number of
          participants, and the reach of the trend to gauge its potential impact and reach. Prioritize trends that have
          significant traction and engagement to maximize the effectiveness of your participation.

          Lastly, stay informed and stay updated on emerging trends and developments on Twitter. Regularly monitor
          trending topics, hashtags, and conversations relevant to your industry, niche, or audience. By staying
          proactive and responsive to trending topics, you can capitalize on opportunities to engage with your audience,
          amplify your brand's visibility, and drive meaningful interactions.

        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
          <h4>What Impacts any hashtag to Trend in Twitter</h4>
        </button>
      </h2>
      <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>Several factors contribute to the trending of a hashtag on Twitter:</p>
          <ul>
            <li><strong>Volume of Tweets:</strong> The primary factor is the volume of tweets containing the hashtag.
              The more tweets that use a particular hashtag within a short period, the more likely it is to trend.
              However, it's not just about the quantity but also the velocity—the speed at which tweets are posted.</li>
            <li><strong>Engagement Levels:</strong> High engagement, such as retweets, likes, and replies, also plays a
              significant role. Hashtags that spark conversations, debates, or emotional responses are more likely to
              trend because they encourage users to interact with the tweets containing the hashtag.</li>
            <li><strong>Influencer Involvement:</strong> Influential users, including celebrities, politicians, and
              thought leaders, can amplify a hashtag's visibility by incorporating it into their tweets. Their large
              following and influence can catalyze the trend and encourage more users to join the conversation.</li>
            <li><strong>Relevance:</strong> The relevance of the hashtag to current events, popular culture, or ongoing
              conversations is crucial. Hashtags related to breaking news, viral topics, events, or holidays are more
              likely to trend because they resonate with a broader audience and capture widespread interest.</li>
            <li><strong>Localization:</strong> Trends may vary based on geographical location. Hashtags that are
              relevant to specific regions or communities may trend locally even if they don't gain traction globally.
              Twitter's tailored trends feature reflects this by showing trending topics based on a user's location.
            </li>
            <li><strong>Timing:</strong> The timing of when a hashtag is introduced or gains momentum can significantly
              impact its trendability. Hashtags that coincide with peak online activity periods or coincide with
              specific events or milestones are more likely to trend as they have a higher chance of being noticed by
              users.</li>
            <li><strong>External Factors:</strong> External factors such as media coverage, offline events, or cultural
              phenomena can influence hashtag trends. For example, a hashtag related to a viral video, a televised
              event, or a popular TV show may trend due to increased public interest generated by external sources.</li>
          </ul>
          <p>Overall, a combination of these factors—volume, engagement, relevance, influencer involvement,
            localization, timing, and external factors—determines whether a hashtag trends on Twitter. Understanding
            these dynamics can help users strategize and optimize their use of hashtags to maximize visibility and
            engagement on the platform.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
          <h4>Impact of Twitter trend in media </h4>
        </button>
      </h2>
      <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>The impact of Twitter trends on traditional media and journalism is significant and multifaceted:</p>
          <ul>
            <li><strong>News Coverage:</strong> Twitter trends often reflect current events, breaking news, and trending
              topics that capture public attention. Journalists and news outlets frequently monitor Twitter trends to
              identify emerging stories, gauge public sentiment, and stay updated on the latest developments. Trends
              serve as valuable sources of real-time information and often inform news coverage across various media
              platforms.</li>
            <li><strong>Story Development:</strong> Twitter trends can influence the development of news stories by
              highlighting issues, events, or discussions that resonate with a broad audience. Journalists may
              investigate trending topics further, conduct interviews, and provide in-depth analysis to provide context
              and perspective on trending issues.</li>
            <li><strong>Amplification of Content:</strong> Trends on Twitter can amplify the reach and visibility of
              news articles, opinion pieces, and multimedia content produced by journalists and media organizations.
              When a topic trends on Twitter, it attracts widespread attention and engagement, leading to increased
              traffic to related news articles and online publications.</li>
            <li><strong>Feedback and Interaction:</strong> Twitter trends facilitate direct interaction between
              journalists, media outlets, and the public. Users can share their opinions, ask questions, and provide
              feedback on news stories and media coverage through trending hashtags and discussions. This two-way
              communication fosters engagement and enables journalists to connect with their audience in real-time.</li>
            <li><strong>Crowdsourced Reporting:</strong> Twitter trends often serve as a platform for crowdsourced
              reporting, where users share eyewitness accounts, photos, and videos of unfolding events. Journalists may
              incorporate user-generated content from Twitter into their reporting, providing additional perspectives
              and firsthand accounts to enhance their coverage.</li>
            <li><strong>Public Agenda Setting:</strong> Twitter trends can influence the public agenda by shaping the
              topics and issues that receive attention from both traditional media and the general public. As trending
              topics gain traction on Twitter, they may prompt media outlets to prioritize certain stories and allocate
              resources to cover them more extensively.</li>
            <li><strong>Cultural Impact:</strong> Twitter trends contribute to shaping cultural conversations and
              driving social change by amplifying voices, raising awareness about important issues, and mobilizing
              communities around shared causes. Trends related to social justice, activism, and movements often receive
              widespread coverage in traditional media, further amplifying their impact on society.</li>
          </ul>
          <p>Overall, Twitter trends play a significant role in shaping the media landscape, influencing news coverage,
            facilitating interaction between journalists and the public, and driving conversations around important
            issues. As Twitter continues to evolve as a platform for news and information dissemination, its impact on
            traditional media and journalism is likely to remain substantial.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
          <h4>Role of Social Media in Society</h4>
        </button>
      </h2>
      <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">

          Social media plays a pivotal role in shaping modern society by revolutionizing communication, connectivity,
          and information dissemination. At its core, social media platforms serve as virtual communities where
          individuals can connect, interact, and share content with unprecedented ease and speed. These platforms have
          transformed how people communicate, enabling instant messaging, video calls, and multimedia sharing across
          vast distances.

          Beyond personal interactions, social media serves as a powerful tool for information dissemination,
          democratizing access to news, opinions, and diverse perspectives. Users can quickly access news updates,
          follow public figures, and engage with topical discussions, breaking down traditional barriers to information
          dissemination.

          Moreover, social media platforms have become catalysts for social movements, activism, and civic engagement.
          They provide a platform for marginalized voices to be heard, amplify social justice initiatives, and mobilize
          communities around shared causes. From hashtag campaigns to online petitions, social media empowers
          individuals to effect change and advocate for social, political, and environmental issues.

          However, social media's impact on society is not without challenges. Concerns about privacy, misinformation,
          echo chambers, and online harassment underscore the need for responsible usage and regulatory oversight.

          In summary, social media has become an integral part of modern society, reshaping how we communicate, access
          information, and engage with the world around us. Its influence spans across various aspects of life, from
          personal relationships to global activism, making it a defining force in the digital age.

        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo">
          <h4>Top Countries wise users of Twitter</h4>
        </button>
      </h2>
      <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>Twitter, a leading social media platform, boasts a global user base that spans continents and cultures.
            While usage patterns vary across regions, certain countries stand out for their active and engaged Twitter
            communities. These countries not only demonstrate a high number of Twitter users but also exhibit a penchant
            for leveraging the platform for diverse purposes, including news consumption, public discourse, and social
            activism. Let's explore the top countries with the wisest users of Twitter:</p>
          <ul>
            <li><strong>United States:</strong> As the birthplace of Twitter and a tech-savvy nation, the United States
              boasts one of the largest Twitter user bases worldwide. From politicians to celebrities, Americans use
              Twitter extensively for sharing opinions, breaking news, and engaging in public debates.</li>
            <li><strong>India:</strong> With a rapidly growing internet population, India has emerged as a major hub for
              Twitter users. Indians utilize the platform for a wide range of purposes, including political discourse,
              entertainment, and social activism, making it a vibrant and diverse Twitter community.</li>
            <li><strong>Brazil:</strong> Brazil has a sizable Twitter user base known for its active engagement in
              online conversations, particularly regarding politics, sports, and cultural events. Brazilian Twitter
              users often drive trending topics and amplify their voices on various social issues.</li>
            <li><strong>Japan:</strong> Japan has a unique Twitter culture characterized by its use of hashtags, emojis,
              and multimedia content. Twitter is popular among Japanese users for sharing news, pop culture trends, and
              providing real-time updates during emergencies and natural disasters.</li>
            <li><strong>United Kingdom:</strong> Twitter usage is prevalent in the United Kingdom, where users engage in
              discussions on politics, current affairs, and popular culture. British Twitter users actively participate
              in online activism and amplify social justice initiatives.</li>
            <li><strong>Indonesia:</strong> Indonesia boasts a vibrant Twitter community known for its active engagement
              in discussions on politics, religion, and entertainment. Indonesian Twitter users often drive trending
              topics and use the platform to voice their opinions on various social issues.</li>
            <li><strong>Mexico:</strong> Mexico has a significant Twitter user base, with users utilizing the platform
              for political discourse, entertainment, and social activism. Mexican Twitter users often participate in
              online campaigns and discussions related to social justice and human rights.</li>
            <li><strong>Nigeria:</strong> Twitter usage is on the rise in Nigeria, with a growing community of users
              leveraging the platform for news consumption, political activism, and cultural expression. Nigerian
              Twitter users actively engage in discussions on social issues and amplify their voices on various topics.
            </li>
            <li><strong>South Korea:</strong> South Korea has a tech-savvy population that embraces Twitter for sharing
              news, entertainment, and cultural content. Korean Twitter users are known for their use of hashtags and
              multimedia content to drive discussions on a wide range of topics.</li>
            <li><strong>Turkey:</strong> Twitter usage is prevalent in Turkey, where users actively engage in
              discussions on politics, social issues, and cultural trends. Turkish Twitter users often use the platform
              to express dissenting opinions and advocate for human rights and freedom of expression.</li>
          </ul>
          <p>These countries represent some of the top regions with active and engaged Twitter communities, showcasing
            the platform's global reach and influence in facilitating public discourse and social interaction.</p>
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo">
          <h4>FAQ</h4>
        </button>
      </h2>
      <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <ol>
            <li><strong>What is Twitter?</strong> Twitter is a popular social media platform that allows users to share
              short messages called tweets, which are limited to 280 characters.</li>
            <li><strong>How does Twitter Trend work?</strong> Twitter Trend aggregates real-time data from Twitter to
              showcase the most popular and relevant topics currently trending on the platform.</li>
            <li><strong>Why is Twitter Trend useful?</strong> Twitter Trend helps users stay informed about the latest
              discussions, news, and events happening around the world in real-time.</li>
            <li><strong>What factors contribute to a hashtag trending on Twitter?</strong> The trending of a hashtag on
              Twitter depends on factors such as the volume of tweets, engagement levels, influencer involvement,
              relevance, timing, localization, and external factors.</li>
            <li><strong>How does Twitter influence traditional media?</strong> Twitter trends often shape news coverage,
              influence story development, amplify content, facilitate crowdsourced reporting, set public agendas, and
              contribute to cultural conversations.</li>
            <li><strong>Which countries have the most active Twitter users?</strong> Top countries with active Twitter
              users include the United States, India, Brazil, Japan, the United Kingdom, Indonesia, Mexico, Nigeria,
              South Korea, and Turkey.</li>
            <li><strong>What are some benefits of using Twitter?</strong> Benefits of using Twitter include staying
              informed about current events, connecting with others, networking, engaging in discussions, expressing
              opinions, and accessing diverse perspectives.</li>
            <li><strong>How can businesses leverage Twitter for marketing?</strong> Businesses can leverage Twitter for
              marketing by engaging with customers, sharing updates and promotions, providing customer service,
              conducting market research, and building brand awareness.</li>
            <li><strong>How does Twitter impact social activism?</strong> Twitter serves as a platform for social
              activism by amplifying voices, raising awareness about social issues, mobilizing communities, facilitating
              online campaigns, and driving conversations about social justice.</li>
            <li><strong>What are some challenges associated with Twitter usage?</strong> Challenges associated with
              Twitter usage include privacy concerns, misinformation, echo chambers, online harassment, addiction, and
              regulatory issues.</li>
            <li><strong>How can users ensure responsible usage of Twitter?</strong> Users can ensure responsible usage
              of Twitter by verifying information before sharing, engaging respectfully, avoiding hate speech and
              harassment, protecting privacy, and being mindful of their online behavior.</li>
            <li><strong>How does Twitter facilitate community building?</strong> Twitter facilitates community building
              by connecting users with shared interests, enabling interactions through tweets and replies, fostering
              discussions around topics of interest, and providing opportunities for networking and collaboration.</li>
            <li><strong>What are some common features of Twitter Trending topics?</strong> Common features of Twitter
              Trending topics include breaking news, viral content, cultural events, political discussions,
              entertainment news, and social movements.</li>
            <li><strong>How can users maximize their engagement with Twitter Trending?</strong> Users can maximize their
              engagement with Twitter Trending by actively participating in discussions, using relevant hashtags,
              sharing their opinions, retweeting interesting content, and staying informed about trending topics.</li>
            <li><strong>What role does Twitter play in shaping public discourse?</strong> Twitter plays a significant
              role in shaping public discourse by providing a platform for individuals to express opinions, share
              information, engage in debates, and influence public opinion on a wide range of topics.</li>
          </ol>
        </div>
      </div>
    </div>


  </div>
</div>
<div class="container-fluid">
  <div class="card mt-4">
    <div class="card-body">
      There are real-time updates of all hashtags (data).
      we do not store any data in our database. this will help you to stop manipulating trends as other sites* do. We
      support what is real. In order to give you insights on what's trending right now and help you keep up with the
      audience, we provide real time Trending Twitter data.

    </div>
  </div>
</div>


<footer class="mt-5" style="background: #141414;">
  <div class="container-fluid p-4">
    <div class="row py-3 gy-3">
      <div class="col-sm-9">
        <div class="d-flex align-items-center mb-3">



          <svg width="50" height="50" fill="#fff" xmlns="http://www.w3.org/2000/svg" class="bi bi-twitter"
            viewBox="0 0 16 16">
            <path
              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>

          <span class="text-sm fw-bold text-white ms-2 h1">#TrendsAllDay</span>
        </div>
        <p class="text-white text-sm fw-light mb-3">
          Throughout the day, stay up to date on the latest hashtags and topical discussions on Twitter.
          Watch trending topics' history for every hour of the last 24 hours excludive on our site.
          We provide Today's Twitter trends in countries around the world. </p>

        <p class="text-white text-sm fw-light mb-3">
          We can use real-time Twitter trends in order to have a better understanding of what hot topics are being
          discussed across the world on social media at any given moment.
          This information is collected via Twitter Trends.


          The best place to track the world is on Twitter. All of the current big events are tweeted about by its users,
          and they quickly become trends.

        </p>


        <ul class="list-inline mb-0 text-white">
          <li class="list-inline-item"><a class="reset-anchor text-sm text-white" href="#!"><svg
                xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg></a></li>
          <li class="list-inline-item"><a class="reset-anchor text-sm text-white" href="#!"><svg
                xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter"
                viewBox="0 0 16 16">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
              </svg></a></li>
          <li class="list-inline-item"><a class="reset-anchor text-sm text-white" href="#!"><svg
                xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg></a></li>
          <li class="list-inline-item"><a class="reset-anchor text-sm text-white" href="#!"><svg
                xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-whatsapp"
                viewBox="0 0 16 16">
                <path
                  d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h6 class="pt-2 text-white h3">Useful links</h6>



        <?php

        $sql = "SELECT * FROM page order by id ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo '<div class="row">';
          while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $t = $row["title"];
            $s = $row["slug"];
            echo '<div class="mt-2 col-6"><a class="text-white text-decoration-none" href="/page/' . $s . '">' . ucwords($t) . '</a></div>';
          }
          echo '</div>';
        }


        ?>






      </div>

    </div>
  </div>
  <!-- <div class="copyrights p-3" style="background: #000">
        <div class="container-fluid">
          <div class="row text-center gy-2">
            <div class="col-sm-6 text-lg-start">
              <p class="mb-0 text-white mb-0 text-sm">&copy; 2022 All rights reserved.</p>
            </div>
            <div class="col-sm-6 text-md-end">
              <p class="mb-0 text-white mb-0 text-sm">Devloped By CodeHap.</p>
            </div>
          </div>
        </div>
      </div> -->
</footer>

<script src="/custom.js?v=1.3"></script>


<script>
  function showResult(str) {
    if (str.length == 0) {
      document.getElementById("livesearch").innerHTML = "";

      return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET", "/result.php?term=" + str, true);
    xmlhttp.send();
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>