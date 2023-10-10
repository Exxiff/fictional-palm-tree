<?php

declare(strict_types=1);

class Video
{
    private string $title;
    private bool $currentState = true;
    private int $timesRated = 0;
    private float $averageRating = 0.0;
    private int $totalRating = 0;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function checkOut(): void
    {
        if ($this->currentState === false) {
            echo "Movie is already rented out!\n";
        }
        $this->currentState = false;
    }

    public function returnVideo(): void
    {
        if ($this->currentState === true) {
            echo "Movie haven't been rented yet!\n";
        }
        $this->currentState = true;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStatus(): bool
    {
        return $this->currentState;
    }

    public function giveRating(int $rating): void
    {
        $this->timesRated++;
        $this->totalRating += $rating;
        $this->averageRating = ($this->totalRating / $this->timesRated);
    }

    public function getRating(): float
    {
        return floatval(number_format($this->averageRating, 1));
    }
}

class VideoStore
{
    public array $inventory = [];

    public function addVideo(string $title): void
    {
        $video = new Video($title);
        $this->inventory[$title] = $video;
    }

    public function rentVideo(string $title): void
    {
        /**
         * @var Video $video
         */
        if (isset($this->inventory[$title])) {
            $video = $this->inventory[$title];
            $video->checkOut();
        } else {
            echo "Video not found in inventory.\n";
        }
    }

    public function rateVideo(int $rating, string $title): void
    {
        /**
         * @var Video $video
         */
        $video = $this->inventory[$title];
        $video->giveRating($rating);
    }

    public function returnVideo(string $title): bool
    {
        /**
         * @var Video $video
         */
        if (isset($this->inventory[$title])) {
            $video = $this->inventory[$title];
            if (!($video->getStatus())) {
                $video->returnVideo();
                echo $video->getTitle() . " returned successfully.\n";
                return true;
            } else {
                echo $video->getTitle() . " is already in the store.\n";
            }
        } else {
            echo "Video not found in inventory.\n";
        }
        return false;
    }


    public function displayInfo(): void
    {
        /**
         * @var Video $video
         */
        echo "////Movie list////\n";
        foreach ($this->inventory as $video) {
            if ($video->getStatus()) {
                $status = 'Available';
            } else {
                $status = 'Rented out';
            }
            echo "* {$video->getTitle()} - Rating: {$video->getRating()}/5 - Status: $status\n";
        }
    }
}

class VideoStoreTest
{
    public static function test(): void
    {
        $store = new VideoStore();
        $store->addVideo("The Matrix");
        $store->addVideo("Godfather II");
        $store->addVideo("Star Wars Episode IV: A New Hope");

        $store->rateVideo(5, "The Matrix");
        $store->rateVideo(0, "The Matrix");
        $store->rateVideo(5, "Godfather II");
        $store->rateVideo(4, "Godfather II");

        $store->rentVideo("Star Wars Episode IV: A New Hope");
        $store->rentVideo("Godfather II");

        $store->returnVideo("Godfather II");

        $store->displayInfo();
    }
}

class Application
{
    private VideoStore $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
        $this->initializeInventory();
    }

    function run()
    {
        while (true) {
            echo "\nMain Menu\n";
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addVideo();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function initializeInventory(): void
    {
        $this->videoStore->addVideo("Pulp Fiction");
        $this->videoStore->addVideo("Shrek");
        $this->videoStore->addVideo("Inception");
        $this->videoStore->addVideo("Fight Club");

        $this->videoStore->rateVideo(5, "Pulp Fiction");
        $this->videoStore->rateVideo(4, "Shrek");
        $this->videoStore->rateVideo(5, "Fight Club");
        $this->videoStore->rateVideo(5, "Inception");

        $this->videoStore->rentVideo("Shrek");
    }

    private function addVideo(): void
    {
        $title = (string)readline("Enter name of movie: ");
        $this->videoStore->addVideo($title);
        echo "$title added!\n";
    }

    private function rentVideo(): void
    {
        $title = readline("Enter name of movie: ");
        $this->videoStore->rentVideo($title);
    }

    private function returnVideo(): void
    {
        $title = readline("Enter name of movie: ");
        $successfulReturn = $this->videoStore->returnVideo($title);
        if ($successfulReturn) {
            do {
                $rating = (int)readline("What would you like to rate this movie? (1-5) : ");
            } while (!($rating >= 1 && $rating <= 5));

            $this->videoStore->rateVideo($rating, $title);
        }
    }

    private function listInventory(): void
    {
        $this->videoStore->displayInfo();
    }
}

//VideoStoreTest::test();

$app = new Application();
$app->run();