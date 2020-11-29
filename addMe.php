<?php

use App\Models\CV;
use App\Repositories\CvRepository;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\DBAL\Schema\Table;

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function database(): Connection
{
    $connectionParams = [
        'dbname' => $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'host' => $_ENV['DB_HOST'],
        'driver' => 'pdo_mysql',
    ];

    $connection = DriverManager::getConnection($connectionParams);
    $connection->connect();

    return $connection;
}

function query(): QueryBuilder
{
    return database()->createQueryBuilder();
}

$schema = database()->getSchemaManager();
if (!$schema->tablesExist('cvs')) {
    $cvs = new Table('cvs');
    $cvs->addColumn('id', 'integer', array('autoincrement' => true));
    $cvs->setPrimaryKey(array('id'));
    $cvs->addColumn('basic_data', 'text');
    $cvs->addColumn('education', 'text');
    $cvs->addColumn('work_experience', 'text');
    $cvs->addColumn('other', 'text');
    $cvs->addColumn('pitch', 'text');
    $cvs->addColumn('email', 'text');
    $cvs->addColumn('image', 'text');

    $schema->createTable($cvs);

    echo "Table created\n";

    $repository = new CvRepository('cvs');
    $cv = new CV('Aivars', 'Sīlis', 'aivars.silis@gmail.com', '29114238');
    $cv->setPitch('I am a passionate software developer currently learning back-end web development (PHP). My previous work experience is mostly embedded programming in C and my hobby is game design in Unity (C# scripting). I am looking for a full time software developer position.');
    $cv->setEducation([
        [
            'school' => 'Riga Tehnical University',
            'faculty' => 'Electronics and Telecommunication Faculty',
            'degree' => 'Bachelors Degree in Science of Electrical Engineering',
            'status' => 'Finished',
            'other' => 'Course topics include: Technical mathematics, Computer programming, Electronic device applications, Microprocessor applications and programming, Industrial automation controls, etc.',
            'start' => '2008',
            'end' => '2011'
        ],
    ]);
    $cv->setWorkExperience([
        [
            'place' => 'CODELEX',
            'position' => 'Software Engineer',
            'description' => 'PHP, MySQL, Laravel - HTML & CSS, React basics - Unit & Integration testing (including TDD methods) - MVC, SOLID & design patterns (KISS, DRY etc.) - Building REST API - GIT.',
            'start' => '09/2020',
            'end' => 'Present'
        ],
        [
            'place' => 'Kompanija NA',
            'position' => 'Electronics Engineer',
            'description' => 'Schematic and PCB design in Altium Designer (DMX splitters, LED lighting, user interface).',
            'start' => '11/2019',
            'end' => '06/2020'
        ],
        [
            'place' => 'Winmill',
            'position' => 'Electronics Engineer',
            'description' => 'Assembly, testing, fault diagnostics and repairs of hockey robot. Schematic and PCB design in Circuit Studio and Kicad (embedded system, motor control, power supplies, battery management).',
            'start' => '03/2019',
            'end' => '09/2020'
        ],
        [
            'place' => 'Idea Bits Latvia',
            'position' => 'Electronics Engineer',
            'description' => 'Programming of embedded systems (Arduino, EZR32) in C. Developing new sensors for home automation – smart switches and different types of sensors (CO,CO2,T&H) and maintaining different types of electronic projects for DraugiemGroup. Schematic and PCB design (Altium Designer, Eagle). Management of electronics and wiring manufacturing in small batches.',
            'start' => '03/2016',
            'end' => '11/2018'
        ]

    ]);
    $cv->setOther(['PHP','GIT','HTML & CSS','SQL','Laravel Framework','Javascript','C,C#']);
    $cv->setImage('uploads/1_foto.png');

    $repository->storeOne($cv);

    echo "All done!\n";


} else {
    echo "Table exists\n";
}
