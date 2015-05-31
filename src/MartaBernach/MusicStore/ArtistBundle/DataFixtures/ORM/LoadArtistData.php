<?php

namespace MartaBernach\MusicStore\ArtistBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MartaBernach\MusicStore\ArtistBundle\Entity\Artist;
use MartaBernach\MusicStore\ArtistBundle\Entity\ArtistPhoto;
use MartaBernach\MusicStore\BandBundle\Entity\Band;
use MartaBernach\MusicStore\BandBundle\Entity\BandMember;
use MartaBernach\MusicStore\AlbumsBundle\Entity\Album;
use MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumTrack;
use \DateTime;

class LoadArtistData implements FixtureInterface
{
    private $manager = null;
    private $data = array(
        'hey' => array(
            'id' => 1,
            'name' => 'Hey',
            'formed' => 1992,
            'originCountry' => 'Polska',
            'originCity' => 'Szczecin',
            'biography' => 'Polski zespół muzyczny, powstały w 1992 w Szczecinie. Inicjatorem był gitarzysta Piotr Banach. Od początku istnienia wokalistką zespołu jest Katarzyna Nosowska. Zespół wykonuje różnorodną muzykę w granicach szeroko pojętego rocka z wpływami muzyki elektronicznej.',
            'members' => array(
                array(
                    'stageName' => null,
                    'firstName' => 'Katarzyna',
                    'lastName' => 'Nosowska',
                    'biography' => '(ur. 30 sierpnia 1971 roku w Szczecinie) – wokalistka znana z zespołu Hey oraz dokonań solowych, autorka tekstów.',
                    'role' => 'wokal',
                    'former' => false
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Paweł',
                    'lastName' => 'Krawczyk',
                    'biography' => '(ur. 10 września 1972) – polski muzyk, gitarzysta. Członek zespołu Hey, były członek grup Ahimsa i Houk.',
                    'role' => 'gitara, chórki',
                    'former' => false
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Marcin',
                    'lastName' => 'Żabiełowicz',
                    'biography' => '(ur. 4 listopada 1970 w Poznaniu) – polski gitarzysta rockowy i bluesowy.',
                    'role' => 'gitara',
                    'former' => false
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Robert',
                    'lastName' => 'Ligiewicz',
                    'biography' => '(ur. 30 marca 1967 w Goleniowie) – polski perkusista rockowy, znany głównie z zespołu Hey, w którym gra od początku istnienia, brał udział w nagraniach wszystkich albumów grupy. Członek Akademii Fonograficznej ZPAV.',
                    'role' => 'perkusja',
                    'former' => false
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Jacek',
                    'lastName' => 'Chrzanowski',
                    'biography' => '(ur. 3 stycznia 1970 w Szczecinie) – polski gitarzysta basowy i kompozytor, młodszy brat Marka Chrzanowskiego, znany głównie z gry w zespole Hey, którego członkiem jest od 1992 roku nieprzerwanie do dziś.',
                    'role' => 'gitara basowa',
                    'former' => false
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Marcin',
                    'lastName' => 'Zabrocki',
                    'biography' => null,
                    'role' => 'instrumenty klawiszowe, sampling, chórki',
                    'former' => false
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Piotr',
                    'lastName' => 'Banach',
                    'biography' => '(ur. 5 marca 1965 w Szczecinie) – polski muzyk, kompozytor i producent muzyczny.',
                    'role' => 'gitara',
                    'former' => true
                ),
                array(
                    'stageName' => null,
                    'firstName' => 'Marcin',
                    'lastName' => 'Macuk',
                    'biography' => '(ur. 20 kwietnia 1976 w Szczecinie), znany również jako Emma Cuk - polski muzyk, kompozytor, wokalista, producent muzyczny i multiinstrumentalista. Członek Akademii Fonograficznej ZPAV.',
                    'role' => 'gitara basowa',
                    'former' => true
                ),
            ),
            'albums' => array(
                array(
                    'name' => 'Fire',
                    'releaseDate' => 1993,
                    'summary' => 'Pierwszy studyjny album polskiej grupy muzycznej Hey. Wydawnictwo zrealizowano w składzie: Katarzyna Nosowska (śpiew, słowa), Piotr Banach (gitara, muzyka), Jacek Chrzanowski (gitara basowa), Robert Ligiewicz (perkusja) oraz Marcin Żabiełowicz (gitara), ponadto gościnnie w 8 utworze zaśpiewała Edyta Bartosiewicz, a w 18 zaśpiewał Andrzej "Kobra" Kraiński. Album muzycznie w stylu rocka i grunge.',
                    'tracks' => array(
                        array(
                            'name' => 'One of Them',
                            'duration' => '2:44',
                            'rank' => 1
                        ),
                        array(
                            'name' => 'Choice',
                            'duration' => '3:38',
                            'rank' => 2
                        ),
                        array(
                            'name' => 'Dreams',
                            'duration' => '2:46',
                            'rank' => 3
                        ),
                        array(
                            'name' => 'Nonsense',
                            'duration' => '2:45',
                            'rank' => 4
                        ),
                        array(
                            'name' => 'Karą będzie lęk',
                            'duration' => '3:36',
                            'rank' => 5
                        ),
                        array(
                            'name' => 'Little Peace',
                            'duration' => '2:50',
                            'rank' => 6
                        ),
                        array(
                            'name' => 'Zazdrość',
                            'duration' => '2:01',
                            'rank' => 7
                        ),
                        array(
                            'name' => 'Moja i twoja nadzieja',
                            'duration' => '4:46',
                            'rank' => 8
                        ),
                        array(
                            'name' => 'Desire',
                            'duration' => '3:58',
                            'rank' => 9
                        ),
                        array(
                            'name' => 'Delusions',
                            'duration' => '3:29',
                            'rank' => 10
                        ),
                        array(
                            'name' => 'Eksperyment',
                            'duration' => '3:40',
                            'rank' => 11
                        ),
                        array(
                            'name' => 'Flowers for Titus',
                            'duration' => '3:21',
                            'rank' => 12
                        ),
                        array(
                            'name' => 'Zobaczysz',
                            'duration' => '4:20',
                            'rank' => 13
                        ),
                        array(
                            'name' => 'Schisophrenic Family',
                            'duration' => '1:54',
                            'rank' => 14
                        ),
                        array(
                            'name' => 'Fate',
                            'duration' => '3:04',
                            'rank' => 15
                        ),
                        array(
                            'name' => '38',
                            'duration' => '0:38',
                            'rank' => 16
                        ),
                        array(
                            'name' => 'Teksański',
                            'duration' => '2:42',
                            'rank' => 17
                        ),
                        array(
                            'name' => 'Moja i twoja nadzieja (acoustic)',
                            'duration' => '3:05',
                            'rank' => 18
                        )
                    )
                ),
                /*array(
                    'name' => '',
                    'releaseDate' => '',
                    'summary' => '',
                    'tracks' => array(
                        array(
                            'name' => '',
                            'duration' => '',
                            'rank' => 1
                        ),
                    )
                ),
                array(
                    'name' => '',
                    'releaseDate' => '',
                    'summary' => '',
                    'tracks' => array(
                        array(
                            'name' => '',
                            'duration' => '',
                            'rank' => 1
                        ),
                    )
                ),*/
            )
        ),
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;

        if (!empty($this->data)) {
            foreach ($this->data as $band) {
                $bandObject = $this->addBand($band);

                if (isset($band['members']) and !empty($band['members'])) {
                    foreach ($band['members'] as $member) {
                        $artistObject = $this->addArtist($member);
                        $bandMemberObject = $this->addBandMember($bandObject, $artistObject, $member);
                    }
                }

                if (isset($band['albums']) and !empty($band['albums'])) {
                    foreach ($band['albums'] as $album) {
                        $albumObject = $this->addAlbum($bandObject, $album);

                        if (isset($album['tracks']) and !empty($album['tracks'])) {
                            foreach ($album['tracks'] as $track) {
                                $trackObject = $this->addAlbumTrack($albumObject, $track);
                            }
                        }
                    }
                }
            }
        }
    }

    private function addBand($band)
    {
        $bandObject = new Band();
        $bandObject->setName($band['name']);
        $bandObject->setFormed($band['formed']);
        $bandObject->setOriginCountry($band['originCountry']);
        $bandObject->setOriginCity($band['originCity']);
        $bandObject->setBiography($band['biography']);

        $this->manager->persist($bandObject);
        $this->manager->flush();

        return $bandObject;
    }

    private function addArtist($artist)
    {
        $artistObject = new Artist();
        $artistObject->setStageName($artist['stageName']);
        $artistObject->setFirstName($artist['firstName']);
        $artistObject->setLastName($artist['lastName']);

        $this->manager->persist($artistObject);
        $this->manager->flush();

        return $artistObject;
    }

    private function addBandMember($bandObject, $artistObject, $memberData)
    {
        $bandMemberObject = new BandMember();
        $bandMemberObject->setBand($bandObject);
        $bandMemberObject->setArtist($artistObject);
        $bandMemberObject->setRole($memberData['role']);
        $bandMemberObject->setFormer($memberData['former']);

        $this->manager->persist($bandMemberObject);
        $this->manager->flush();

        return $bandMemberObject;
    }

    private function addAlbum($bandObject, $album)
    {
        $albumObject = new Album();
        $albumObject->setBand($bandObject);
        $albumObject->setName($album['name']);
        $albumObject->setReleaseDate($this->formatReleaseDate($album['releaseDate']));
        $albumObject->setSummary($album['summary']);

        $this->manager->persist($albumObject);
        $this->manager->flush();

        return $albumObject;
    }

    private function addAlbumTrack($albumObject, $track)
    {
        $trackObject = new AlbumTrack();
        $trackObject->setAlbum($albumObject);
        $trackObject->setName($track['name']);
        $trackObject->setDuration($this->formatDuration($track['duration']));
        $trackObject->setRank($track['rank']);

        $this->manager->persist($trackObject);
        $this->manager->flush();

        return $trackObject;
    }

    private function formatReleaseDate($year = 1900, $month = 0, $day = 0) {
        $result = new DateTime();
        $result->setDate($year, $month, $day);
        return $result;
    }

    private function formatDuration($duration)
    {
        $duration = explode(':', $duration);
        if (!empty($duration) and count($duration) == 1) {
            $hour = 0;
            $minute = 0;
            $second = (int)$duration[0];
        } elseif (!empty($duration) and count($duration) == 2) {
            $hour = 0;
            $minute = (int)$duration[0];
            $second = (int)$duration[1];
        } elseif (!empty($duration) and count($duration) == 3) {
            $hour = (int)$duration[0];
            $minute = (int)$duration[1];
            $second = (int)$duration[2];
        }

        $result = new DateTime();
        $result->setTime($hour, $minute, $second);
        return $result;
    }
}
