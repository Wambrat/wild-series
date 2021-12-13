<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    private const SEASON = [
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 1,
            'year' => 2007,
            'description' => "Saison 1",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 2,
            'year' => 2008,
            'description' => "Saison 2",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 3,
            'year' => 2009,
            'description' => "Saison 3",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 4,
            'year' => 2010,
            'description' => "Saison 4",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 5,
            'year' => 2011,
            'description' => "Saison 5",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 6,
            'year' => 2012,
            'description' => "Saison 6",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 7,
            'year' => 2013,
            'description' => "Saison 7",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 8,
            'year' => 2014,
            'description' => "Saison 8",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 9,
            'year' => 2015,
            'description' => "Saison 9",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 10,
            'year' => 2016,
            'description' => "Saison 10",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 11,
            'year' => 2017,
            'description' => "Saison 11",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 12,
            'year' => 2018,
            'description' => "Saison 12",
        ],
        [
            'seriesName' => "Friends",
            'number' => 1,
            'year' => 1994,
            'description' => "La saison 1 présente les 6 personnages principaux de la série : Monica, Phoebe, Rachel, Joey, Chandler et Ross. Rachel, qui a laissé son fiancé Barry devant l'autel, arrive à New York et finit par vivre chez Monica. Très vite, elle décroche son premier emploi, et devient serveuse au Central Perk, le café préféré des six amis.

            Ross vient de divorcer de Carol, avec qui il était marié depuis huit ans, car celle-ci s'est rendu compte qu'elle était lesbienne. Déjà bouleversé par ce divorce, il apprend que Carol est enceinte de lui. Il va devoir faire face à son rôle de futur père et surtout apprendre à composer avec la compagne de Carol, Susan. Peut-être en réponse à ce désarroi, Ross prend comme animal de compagnie un petit singe, Marcel.
            
            Les autres amis ont des aventures amoureuses variées; c'est dans cette saison que l'on fait connaissance avec Janice, la petite amie agaçante de Chandler, avec qui celui-ci rompra de nombreuses fois tout au long de la série.
            
            La saison se termine sur deux événements majeurs : la naissance du fils de Ross, et la révélation accidentelle à Rachel par Chandler des sentiments que Ross éprouve pour elle. Ross, en effet, déjà très amoureux de Rachel au lycée, voit ses sentiments renaître lorsqu'elle reparaît dans sa vie, et cherche pendant toute la saison l'occasion de les lui avouer. Rachel, réalisant qu'elle est elle-même amoureuse de Ross, décide d'aller le chercher à l'aéroport à son retour de Chine, où il était parti pour raisons professionnelles.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 2,
            'year' => 1995,
            'description' => "Ross ignore que Rachel a des sentiments pour lui et sort avec Julie, une paléontologue qu'il a connue au collège et retrouvé en Chine. Jalouse ou malheureuse, Rachel tente de saboter cette relation, notamment en recommandant à Ross de ne pas « consommer ».

            Rachel accepte finalement de rencontrer avec un autre homme, Michael. Le soir de leur première rencontre, ivre, elle laisse sur le répondeur de Ross un message évoquant les sentiments qu'elle lui porte. Ross l'entend et est plongé dans une grande confusion sentimentale. Après une dispute, Ross et Rachel s'embrassent. Ne sachant pas qui choisir entre Rachel et Julie, Ross établit une liste des « pour » et des « contre » qui le décide à choisir Rachel… Laquelle découvre la liste et se fâche. Elle finit par se laisser attendrir quelques épisodes plus tard en comprenant grâce à une vieille cassette vidéo que Ross s'était montré très chevaleresque à son égard un soir de bal de promo.
            
            Joey décroche le rôle du docteur Drake Ramoray dans le soap Les jours de notre vie, et gagne suffisamment d'argent pour emménager dans son propre appartement. Joey rencontrera une fan nommée Erika. Il eut une très courte relation avec elle. Chandler prend alors un nouveau colocataire nommé Eddie, qui se révèle plus tard être à moitié fou. Quand Joey déclare dans une interview, écrire ses propres dialogues dans Les jours de notre vie, les auteurs de la série, offensés, décident de faire mourir son personnage. À nouveau dénué de revenus, Joey réemmenage avec Chandler. Chandler a eu du mal à chasser Eddie de son appartement, celui-ci ne se souvenant jamais que Chandler lui avait demandé de déménager. Chandler et Joey résolvent le problème en enlevant de l'appartement toutes les affaires d'Eddie, en changeant le verrou puis en prétendant ne pas le connaître lorsqu'il frappe à la porte - Eddie pense alors s'être trompé d'appartement et s'en va.
            
            Phoebe découvre qu'elle a un demi-frère, Frank, du côté de son père.
            
            Pendant un moment, Monica sort avec Richard Burke, un ami de ses parents nettement plus âgé qu'elle. Ils deviennent très intimes, mais se séparent au cours du dernier épisode, quand Richard lui annonce qu'il ne veut plus d'enfants, en ayant déjà eu avec son ex-femme.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 3,
            'year' => 1996,
            'description' => "Sous les encouragements de Chandler et Joey, Rachel démissionne du Central Perk et cherche un nouvel emploi dans le domaine de la mode. Elle rencontre Mark, qui lui obtient un job chez Bloomingdale's. Ross, convaincu que Mark a d'autres idées derrière la tête, devient extrêmement jaloux. Les tensions entre Rachel et Ross atteignent leur paroxysme le jour de leur anniversaire, alors que Rachel est trop occupée à son travail pour venir dîner avec Ross. Ross décide alors de lui amener à manger sur son lieu de travail mais elle lui ordonne de partir. Une dispute éclate à leur retour dans l'appartement de Monica, dispute qui prend fin avec la décision de Rachel de « faire une pause ».

            Après cet incident, Ross va boire un verre avec Chandler et Joey. Lui et Rachel décident tous deux indépendamment de résoudre leur conflit, mais quand Ross téléphone à Rachel, il entend la voix de Mark, venu réconforter Rachel. Ross croit alors au pire ; déprimé, il finit la soirée en couchant avec une femme du nom de Chloé. Il essaie d'éviter un conflit avec Rachel en le lui cachant, mais elle le découvre grâce à Gunther, et ils finissent par rompre après une longue dispute.
            
            Cependant, vers la fin de la saison, Rachel déprime après que Ross a commencé à sortir avec une autre femme du nom de Bonnie, une amie de Phoebe. Au cours du dernier épisode, le groupe part en vacances à la plage, pour que Phoebe puisse rencontrer une femme - aussi nommée Phoebe - qui en sait beaucoup à propos de sa famille. Une fois à la plage, Bonnie les rejoint à l'improviste. Rachel, malheureuse, persuade Bonnie de se raser le crâne pour abaisser sa côte auprès de Ross. Cela aboutit à une énième dispute entre Ross et Rachel, au cours de laquelle Ross et Rachel réalisent qu'ils ont encore des sentiments l'un pour l'autre. L'épisode s'achève sur une scène où Ross se trouve debout entre la chambre de Bonnie et celle de Rachel, en choisit une et entre",
        ],
        [
            'seriesName' => "Friends",
            'number' => 4,
            'year' => 1997,
            'description' => "Ross entre dans la chambre et y trouve Rachel et Bonnie. Il décide alors de reprendre sa relation avec Rachel et de rompre avec Bonnie. Rachel lui écrit une lettre dans laquelle elle lui fait part de ses sentiments à propos de la reprise de leur relation, qui se révèle au final n'être qu'une demande à Ross d'endosser l'entière responsabilité de leur rupture. Ce qu'il refuse, et ils se séparent rapidement. Phoebe apprend que l'autre Phoebe est en réalité sa mère biologique, et en fait part à sa sœur jumelle Ursula qui laisse entendre qu'elle le savait depuis le début.

            Phoebe accepte d'être la mère porteuse des enfants de son demi-frère Frank et de sa femme — stérile — Alice. Les embryons conçus par fécondation in vitro sont implantés dans l'utérus de Phoebe qui se retrouve enceinte de triplés.
            
            Chandler rencontre une fille du nom de Kathy qui sort avec Joey. Ces derniers — qui suivent les mêmes cours d'art dramatique — se séparent après que Kathy a embrassé Chandler, alors que Joey était sorti. La relation entre Kathy et Chandler ne dure pas très longtemps car Chandler fait preuve d'une jalousie maladive.
            
            Ross et Rachel commencent à sortir avec d'autres personnes. Rachel rencontre Joshua à son travail et réussit à se faire inviter à une soirée. Cependant, elle devait aller à l'opéra avec la nièce de son patron, une britannique nommée Emily. Elle persuade Ross d'accompagner Emily à l'opéra pour pouvoir aller à sa soirée. Ross et Emily tombent amoureux l'un de l'autre et commencent à sortir ensemble. Leur relation, qui devait se terminer lors du retour d'Emily en Angleterre, continue malgré la distance. Emily quitte même son petit ami anglais pour Ross. Ce dernier souffrant de leur séparation, décide de demander Emily en mariage pour qu'elle vienne habiter avec lui aux États-Unis.
            
            Rachel sort avec Joshua mais n'arrive pas à accepter le mariage de Ross. Elle parle à Joshua de mariage alors qu'ils ne se sont vus que quelques fois et lui fait peur si bien qu'ils se séparent. Le mariage de Ross et Emily a lieu à Londres mais Rachel décide de ne pas y aller. Phoebe doit elle aussi rester car elle est enceinte des triplés. Cependant, à la dernière minute, Rachel se rend compte qu'elle est encore amoureuse de Ross et décide d'aller à Londres pour le lui dire. Elle arrive pour le mariage mais n'ose pas avouer ses sentiments. Son apparition trouble tout de même Ross qui se trompe de prénom lors de la cérémonie : il dit Rachel au lieu de Emily.
            
            La nuit précédant la cérémonie, Monica déprime car un homme l'a prise pour la mère de Ross. Chandler se sent lui aussi un peu seul. Dans des circonstances qui restent assez mystérieuses, ils passent la nuit ensemble et le cachent à tout le monde.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 5,
            'year' => 1998,
            'description' => "Emily s'est enfuie juste après la cérémonie et Ross ne la trouve plus. Il retourne aux États-Unis et fait tout pour sauver leur relation. Emily est excessivement jalouse de Rachel. Pour sauver son mariage, Ross accepte de ne plus voir Rachel. Il doit aussi changer d'appartement et vendre tous ses meubles. Cependant, il se rend compte qu'Emily ne lui fait plus confiance et qu'ils ne peuvent pas continuer ainsi : ils décident de divorcer.

            Pour cacher sa relation avec Monica, Chandler essaie de ne plus embrasser Monica en public.
            
            Phoebe a accouché des triplés qu'elle a dû abandonner à son frère et sa belle-sœur.
            
            La relation entre Chandler et Monica continue malgré leur retour aux États-Unis et devient de plus en plus sérieuse. Ils réussissent à garder le secret jusqu'à ce qu'ils s'organisent un week-end en amoureux qui tourne mal et à la suite duquel Joey découvre la vérité. Seulement, il accepte de garder le silence et les aide même à cacher leur secret aux autres.
            
            Ross n'a pas pu garder son appartement. Il vit pendant un temps chez Chandler et Joey, puis réussit à obtenir l'appartement du gros tout nu en face de chez Monica. Rachel surprend une conversation entre Monica et Chandler et apprend la vérité mais n'en parle qu'à Joey. Phoebe surprend elle aussi les amoureux à travers la fenêtre de l'appartement de Ross (à travers laquelle on voit tout ce qui se passe chez Monica) et à la suite d'une longue blague où Phoebe et Chandler font semblant de flirter, Monica et Chandler avouent aux trois autres leur amour (c'est aussi la première fois que Chandler dit à Monica qu'il l'aime). Peu de temps après, Ross découvre lui aussi la vérité en regardant par sa fenêtre et se rend compte qu'il est le seul à ne pas être au courant. Après un accès de colère, il accepte la relation entre son meilleur ami et sa sœur.
            
            Phoebe a une relation sérieuse avec Gary, un inspecteur de police, accceptant même de vivre avec lui. Mais leur histoire prend fin, lorsqu'un matin, Gary tue un oiseau avec son révolver.
            
            Emily s'est remariée, ce qui contrarie Ross.
            
            Rachel vit une courte histoire avec Danny, un voisin de palier. L'histoire s'achève, suite au malaise perceptible de Rachel face à la relation fusionnelle de Danny et sa sœur.
            
            Joey obtient un rôle dans un film et part pour Las Vegas. Monica a été manger avec Richard, son ex petit ami, et le dit à Phoebe. Ses amis décident de le rejoindre là-bas par surprise et découvrent que le tournage du film a été annulé, faute de moyens. Chandler découvre que Monica a été manger avec Richard. Maintenant Chandler est fâché contre Monica. Tout s'arrange grâce à Phoebe. Chandler et Monica décident de se marier à Las Vegas mais lorsqu'ils vont à l'église, ils découvrent Ross et Rachel en jeunes mariés ivres.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 6,
            'year' => 1999,
            'description' => "Finalement, Chandler et Monica ne se sont pas mariés. Ross et Rachel le sont sans le vouloir et sans le savoir. Ils l'apprennent au matin de leur nuit de noces par leurs amis.

            Chandler et Monica pensent qu'il est trop tôt pour se marier, mais ils décident de s'installer ensemble chez Monica.
            
            Ross doit annuler son mariage avec Rachel, seulement il ne le fait pas et ment à Rachel. Phoebe pense qu'il l'aime toujours. Rachel devait venir habiter chez Ross mais lorsqu'elle apprend le mensonge qu'il lui a fait, elle change d'avis et décide de s'installer chez Phoebe. Devant le juge pour l'annulation du mariage, elle accuse Ross de tous les maux mais le juge n'est pas dupe : il refuse d'annuler le mariage, Ross et Rachel doivent divorcer. C'est le troisième divorce de Ross.
            
            Rachel quitte donc l'appartement de Monica pour celui de Phoebe. Chandler emménage avec Monica et laisse donc Joey tout seul dans son appartement. Ce dernier a du mal à payer les factures et prend une colocataire : Janine. C'est une danseuse très sexy et il tombe amoureux d'elle. Cependant, elle ne semble pas ressentir d'attirance pour lui. Ils ont finalement une aventure qui se termine lorsque Joey se rend compte que Janine n'apprécie pas Monica et Chandler.
            
            Grâce à la pression de Rachel sur Gunther, Joey travaille comme serveur au Central Perk. Ross est attirée par la sœur de Rachel, Jill, mais renonce à une relation avec elle pour ne pas détruire à jamais la possibilité d'une nouvelle liaison avec Rachel.
            
            Deux épisodes sont consacrés à ce qui aurait pu se passer si la vie des Friends avait été différente :
            
                Si Ross était resté marié avec Carol ;
                Si Monica était restée grosse ;
                Si Rachel avait épousé Barry ;
                Si Chandler vivait de l'écriture de ses histoires et blagues ;
                Si Joey était resté dans Day of our lives ;
            
                Si Phoebe était devenue une femme d'affaire.
            
            On apprend que Monica, toujours vierge, finit par avoir une relation avec Chandler. Ce dernier est obligé de devenir l'assistant de Joey pour survivre. Rachel est une fan de Joey et manque d'avoir une relation avec lui malgré son mariage. Elle apprend par la suite que son mari la trompe (avec Mindy).
            
            Ross essaie de sauver son mariage mais découvre l'homosexualité de sa femme, lorsqu'ils tentent une relation à trois avec Susan (Ross, contrairement à ce qu'il avait espéré, n'est que spectateur). Phoebe fait un infarctus avant de se faire virer pour avoir fait perdre trop d'argent à sa société.
            
            On retourne dans la vie réelle où Ross tombe amoureux d'une de ses étudiantes, Elizabeth, et entame une relation avec elle. L'appartement de Phoebe brûle dans un incendie, ce qui oblige les deux filles à déménager : Phoebe s'installe chez Monica et Rachel chez Joey. Ross rencontre le père d'Elizabeth, Paul, avec qui il ne s'entend pas. Cependant, Rachel n'est pas du même avis et sort avec Paul. Les deux relations ne durent pas : à la suite d'une soirée, Rachel trouve Paul trop pleurnicheur ; quant à Ross, il se rend compte en voyant Elizabeth s'amuser avec des amis qu'elle est trop jeune pour lui et la quitte.
            
            Chandler apprend que Monica a réservé le Morgan Chase Museum pour leur mariage. Il lui fait une scène mais décide en fait de lui faire sa demande. Cependant, alors qu'il s'apprête à la faire, ils rencontrent Richard, l'ex-grand amour de Monica, au restaurant. Pour éviter que Monica ne se doute de quelque chose, il feint d'être dégouté du mariage. Mais Monica le prend trop au sérieux et commence à se sentir à nouveau attirée par Richard qui lui avoue qu'il l'aime toujours. Elle finit par apprendre les réelles intentions de Chandler, et le surprend en le demandant elle-même en mariage, ce qu'il accepte.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 7,
            'year' => 2000,
            'description' => "La saison débute avec l'officialisation des fiançailles de Chandler et Monica. Rachel, un peu perdue, pense un moment passer une nuit avec Ross, mais se ravise au dernier moment.

            Phoebe, afin de laisser de l'intimité à Chandler et Monica, part s'installer chez Ross (elle abuse de son hospitalité en proposant des massages chez lui). Rachel vit toujours chez Joey.
            
            Monica se rend compte que ses parents n'ont pas gardé l'argent destiné à financer son mariage. Chandler et Monica sont alors confrontés à un dilemme : faire un grand mariage, le rêve de Monica, ou garder de l'argent pour leur vie future ? Monica montre comme elle a changé en optant pour la dernière solution.
            
            La série dont Joey tient le rôle-titre, Mac and Cheese, est diffusée à la télé, mais elle est très mauvaise. Pendant ce temps, on lui propose de revenir dans Days of Our Lives avec le rôle du frère jumeau du mythique Dr Drake Ramoray. Mais Joey refuse de passer des essais, et il perd cette chance de revenir. Malheureusement, sa série est retirée des écrans. N'ayant plus de travail, il réussit tout de même à reprendre le rôle de Drake Ramoray (dans le coma).
            
            Rachel est promue et engage un assistant, Tag, qu'elle trouve très à son goût. Elle cherche à éviter qu'il ne séduise d'autres femmes. Enfin, à Thanksgiving, elle lui avoue qu'elle l'aime et ils finissent par sortir ensemble, en cachette du patron de Rachel.
            
            La préparation du mariage de Monica se poursuit, et Rachel est choisie comme demoiselle d'honneur, après de nombreuses épreuves.
            
            Joey expérimente un vrai chagrin d'amour en se voyant rejeté par la jolie Erin de la même manière qu'il a toujours rejeté ses multiples conquêtes.
            
            La saison se termine par le mariage de Monica et de Chandler. Rachel apprend également qu'elle est enceinte",
        ],
        [
            'seriesName' => "Friends",
            'number' => 8,
            'year' => 2001,
            'description' => "La huitième saison commence par des interrogations sur le père de l'enfant que porte Rachel. Ross se révèle finalement être le père de cet enfant non voulu.

            Rachel vit désormais avec Joey, depuis que l'appartement de Phoebe a pris feu. Joey commence à éprouver des sentiments pour sa nouvelle colocatrice. Finalement, Rachel donne naissance à une fille, et suite à un quiproquo, croit comprendre que Joey la demande en mariage et accepte. C'était en réalité Ross qui avait l'intention de lui demander sa main.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 9,
            'year' => 2002,
            'description' => "Suite à la naissance de leur bébé qu'ils appellent Emma, Rachel rejoint Ross dans son appartement, bien qu'ils ne sortent pas ensemble. Cette cohabitation ne dure pas et Rachel retourne rapidement vivre avec Joey. Monica et Chandler décide d'avoir un enfant, mais découvrent après de longs mois d'essais qu'ils sont tous les deux stériles.

            Phoebe commence une relation avec Mike, mais le retour de David (scientifique dont Phoebe était amoureuse dans la saison 1) la pousse à choisir entre les deux hommes. Son choix se porte finalement sur Mike.
            
            Ross rencontre une paléontologue, nommée Charlie, mais qui finira par sortir avec Joey. La fin de la saison se déroule à la Barbade et voit de nombreux changements dans les couples, puisque Ross et Charlie finissent par sortir ensemble, imités par Joey et Rachel.",
        ],
        [
            'seriesName' => "Friends",
            'number' => 10,
            'year' => 2003,
            'description' => "La relation entre Rachel et Joey se révèle être un échec, les poussant à ne rester qu'amis. Charlie retourne auprès de son ex-copain, de qui Ross espérait obtenir une bourse d'études scientifiques.

            Monica et Chandler décident d'adopter et rencontrent Erica, mère porteuse qui ne peut garder son enfant. Ils décident de déménager en dehors de la ville pour élever leur enfant dans un cadre de vie plus calme et plus spacieux.
            
            Phoebe se marie avec Mike, et annonce dans le dernier épisode son intention d'avoir un enfant.
            
            Rachel se fait virer de son travail, et accepte une proposition pour aller travailler sur Paris. Ross lui avoue son amour et la supplie de rester.
            
            Dans le dernier épisode, Erica accouche de jumeaux (un garçon et une fille), que Monica et Chandler adoptent. Rachel embarque dans l'avion pour la France, mais se ravise au dernier moment et prend finalement la décision de rester à New-York pour faire sa vie avec Ross. La série se finit sur le déménagement de Monica et Chandler, dans une scène où les six amis réunis se promettent de le rester pour la vie.",
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::SEASON as $key => $season) {  
            
            $program = $manager
                ->getRepository(Program::class)
                ->findOneBy(array('title' => $season['seriesName']))
            ;
            $seasonClass = new Season();  
            $seasonClass->setNumber($season['number']);
            $seasonClass->setYear($season['year']);
            $seasonClass->setDescription($season['description']);
            $seasonClass->setProgramId($program);
    
            $manager->persist($seasonClass);
    
        }  
    
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            ProgramFixtures::class,
        ];
    }
}
