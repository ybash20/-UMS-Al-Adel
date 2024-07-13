@extends('layouts.master')

@section('title', 'News')
@section('news', 'active')

@section('main')
<style>
    .continar_news {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        margin-top: 5%;
    }

    .news_row {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        margin-bottom: 2%;
        box-shadow: 0 2px 4px #343a4075;
        justify-content: space-between;
    }

    .news_row h2 {
        position: absolute;
        left: 20px;
        top: 20px;
        margin: 0;
        padding: 12px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    }

    .news_row .read-more-button {
        position: absolute;
        right: 20px;
        top: 20px;
        padding: 8px 16px;
        font-size: 16px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
    }

    .news_row .read-more-button:hover {
        background-color: #0056b3;
    }

    .news_row .read-more-button:active {
        background-color: #0ddb4b;
    }

    .news {
    margin-top: 5%;
    display: inline-block;
    padding: 10px;
    border: #f2f2f2;
    background-color: #c3f0ff; /* لون خلفية الخبر */
    color: #000; /* لون النص */
    cursor: pointer;
    border-radius: 5px;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4); /* ظل الزر */
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    text-align: left;
    width: calc(33% - 20px);
    max-width: 250px;
}

.news img {
    width: 100%;
    height: auto;
    border-radius: 5px 5px 0 0;
}

    .news h3 {
        text-align: center;
        font-size: 16px;
        margin-bottom: 5px;
        word-break: break-all;
        width: 100%;
        font-family: 'Lemonada', cursive;
    }

    .news p {
        text-align: center;
        font-size: 12px;
        margin-top: 5px;
        font-family: 'Lemonada', cursive;
        word-break: break-all;
        width: 100%;
    }
    .news:hover {
    background-color:#f2f2f2 ; /* لون الخلفية عند التحويل */
    transform: translateY(-5px);
    box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.6); /* ظل الزر عند التحويل */
}

.news:active {
    background-color: #0ddb4b; /* لون الخلفية عند النقر */
    transform: translateY(0);
    box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.4); /* ظل الزر عند النقر */
}
    .prev-button,
    .next-button {
        padding: 8px 16px;
        width: 40px;
        height: 40px;
        font-size: 16px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border-radius: 50%;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4);
        transition: background-color 0.3s;
    }

    .prev-button:hover,
    .next-button:hover {
        background-color: #0056b3;
    }

    .arrows_news {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .arrows_news button {
        background-color: #007bff;
        border: none;
        font-family: 'Lemonada', cursive;
        width: 3%;
        height: 2%;
        border-radius: 50%;
        font-size: x-large;
        color: #fff;
        transition: background-color 0.3s;
        margin: 0 0.5rem;
    }

    .arrows_news button:hover {
        background-color: #0056b3;
    }

    .arrows_news button:active {
        background-color: #0ddb4b;
    }

    @keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.fade-in {
  animation: fadeIn 0.5s;
}




    @media screen and (max-width: 900px) and (min-width: 400px) {
        .continar_news {
            padding: 10px;
        }

        .news_row {
            flex-direction: column;
            padding: 15px;
        }

        .news_row h2 {
            position: relative;
            left: 0;
            top: 0;
            margin-bottom: 10px;
        }

        .news_row .read-more-button {
            position: relative;
            right: 0;
            top: 0;
            margin-top: 25px;
        }

        .news img {
            width: 60%;
            height: 50%;
        }

        .arrows_news {
            display: none;
        }
    }
</style>

<div class="continar_news">
    <div class="news_row">
        <h2>Category News Category </h2>
        <div class="arrows_news">
            <button class="prev-button"><span>&lt;</span></button>
        </div>
        
        <button class="news">
            <img src="image/about.png" alt="News Image">
            <p>Date News 1</p>
            <p>News Content 1</p>
        </button>
        
        
    </div>

   
        
        <div class="arrows_news">
            <button class="next-button"><span>&gt;</span></button>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const rows = document.querySelectorAll('.news_row');
        rows.forEach(row => {
            const news = row.querySelectorAll('.news');
            const prevButton = row.querySelector('.prev-button');
            const nextButton = row.querySelector('.next-button');
            let currentIndex = 0;
            let newsPerRow = 3; // Number of news per row
            let autoSlideInterval; // Interval for automatic slide
            const intervalTime = 3000; // 3 seconds
            let touchMoveFlag = false; // Flag to check if touch move happened

            function showNews(startIndex) {
                news.forEach((newsItem, i) => {
                    if (i >= startIndex && i < startIndex + newsPerRow) {
                        newsItem.style.display = 'block';
                        newsItem.classList.add('fade-in');
                    } else {
                        newsItem.style.display = 'none';
                        newsItem.classList.remove('fade-in');
                    }
                });
            }

            function showNextNews() {
                const nextIndex = currentIndex + newsPerRow;
                if (nextIndex < news.length) {
                    currentIndex = nextIndex;
                    showNews(currentIndex);
                } else {
                    // If we reach the end, reset to the beginning
                    currentIndex = 0;
                    showNews(currentIndex);
                }
                if (!touchMoveFlag) {
                    resetAutoSlide();
                }
            }

            function showPreviousNews() {
                const previousIndex = currentIndex - newsPerRow;
                if (previousIndex >= 0) {
                    currentIndex = previousIndex;
                    showNews(currentIndex);
                } else {
                    // If we reach the beginning, go to the end
                    currentIndex = Math.max(0, news.length - newsPerRow);
                    showNews(currentIndex);
                }
                if (!touchMoveFlag) {
                    resetAutoSlide();
                }
            }

            function adjustNewsPerRow() {
                if (window.innerWidth < 650) {
                    newsPerRow = 2;
                    prevButton.style.display = 'none';
                    nextButton.style.display = 'none';
                } else if (window.innerWidth < 900) {
                    newsPerRow = 2;
                    prevButton.style.display = 'none';
                    nextButton.style.display = 'none';
                } else {
                    newsPerRow = 3;
                    prevButton.style.display = 'inline-block';
                    nextButton.style.display = 'inline-block';
                }
                showNews(currentIndex);
            }

            function handleTouchStart(event) {
                xDown = event.touches[0].clientX;
                touchMoveFlag = false; // Reset touch move flag
            }

            function handleTouchMove(event) {
                if (!xDown) return;

                let xUp = event.touches[0].clientX;
                let xDiff = xDown - xUp;

                if (xDiff > 0) {
                    showNextNews(); // Swipe left to show next news
                } else {
                    showPreviousNews(); // Swipe right to show previous news
                }
                touchMoveFlag = true; // Set touch move flag
                xDown = null; // Reset value
            }

            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(showNextNews, intervalTime);
            }

            prevButton.addEventListener('click', () => {
                showPreviousNews();
                resetAutoSlide(); // Reset auto slide when button clicked
            });

            nextButton.addEventListener('click', () => {
                showNextNews();
                resetAutoSlide(); // Reset auto slide when button clicked
            });

            window.addEventListener('resize', adjustNewsPerRow);
            row.addEventListener('touchstart', handleTouchStart);
            row.addEventListener('touchmove', handleTouchMove);

            adjustNewsPerRow(); // Initial call to set up the view
            autoSlideInterval = setInterval(showNextNews, intervalTime); // Start auto slide when page loads
        });
    });

</script>
@endsection
