<?php

namespace App\Controller;

use App\Entity\Animal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Form\AnimalType;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

class AnimalController extends AbstractController
{

    public function validarEmail($email){
        $validator = Validation::createValidator();
        $errores = $validator->validate($email, [
            new Email()
        ]);
        
        if (count($errores) != 0) {
            echo "El dato no se ha validado correctamente";

            foreach ($errores as $error) {
                echo $error->getMessage().'<br>';
            }
        }else{
            echo "El email se ha validado correctamente";
        }
        die();
    }

    public function crearAnimal(Request $request){
        $animal = new Animal();

        $form = $this->createForm(AnimalType::class, $animal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($animal);
            $entityManager->flush();

            // Sesión flash
            $session = new Session();

            $session->getFlashBag()->add('message', 'Animal creado');

            return $this->redirectToRoute('crear_animal');
        }

        return $this->render('animal/crear-animal.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        //Cargamos el repositorio para hacer consultas de una clase
        $repository = $this->getDoctrine()->getRepository(Animal::class);

        // Busca un solo Animal por la llave primaria (Usualmente "id")
        $animales = $repository->findAll();

        //Ecuentra un animal por el tipo
        // $animal = $repository->findOneBy([
        //     'tipo' => 'koala'
        // ]);

        // var_dump($animal);

        //Ecuentra multiples animales por la raza, y los ordena por ID
        $animal = $repository->findBy(
            ['raza' => 'australiano'],
            ['id' => 'DESC']
        );

        // var_dump($animal);

        //DQL
        $dql = "SELECT a FROM App\Entity\Animal a WHERE a.raza = 'australiano' ORDER BY a.id DESC";
        $query = $em->createQuery($dql);
        $resultSet = $query->execute();

        // SQL
        $connection = $this->getDoctrine()->getConnection();
        $sql = 'SELECT * FROM Animales ORDER BY id DESC';
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();

        // var_dump($resultSet);

        //Repositorio
        $resultSet = $repository->findByRaza('australiano');
        var_dump($resultSet);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }

    public function save(Request $resquest){

        

        /*
        //Guardar en una tabla de la BD

        //Se crea el entityManager para trabajar con la entidad y guardar datos en la BD
        $entityManager = $this->getDoctrine()->getManager();

        //Se instancia un objeto de la entidad Animal
        $animal = new Animal();

        //Se agregan valores al objeto
        $animal->setTipo('Avestruz');
        $animal->setColor('Verde');
        $animal->setRaza('Africana');

        // Le decimos a Doctrine que (eventualmente) guardaremos el Animal (Persistimos el objeto, sin queries todavia)
        $entityManager->persist($animal);

        // Ejecuta actualmente el querie (Ejem: El querie the INSERT)
        $entityManager->flush(); 


        return new Response ('El animal guardado tiene el id: '.$animal->getId()); */
    }

    //Si se indica que el parametro de la funcion es un objeto Animal, se realiza en find() automaticamente
    public function animal(Animal $animal){
        /*
        //Cargamos el repositorio para hacer consultas de una clase
        $repository = $this->getDoctrine()->getRepository(Animal::class);

        // Busca un solo Animal por la llave primaria (Usualmente "id")
        $animal = $repository->find($id);
        */

        if(!$animal){
            throw $this->createNotFoundException(
                'No se encontro un animal por el id:  '.$id
            );
        }

        return new Response('Tu animal elegido es: '.$animal->getTipo(). ' - '.$animal->getRaza());
    }

    public function update($id){
        //Cargar doctrine
        $doctrine = $this->getDoctrine();

        //Cargar entityManager
        $entityManager = $doctrine->getManager();

        //Cargar repo Animal
        $animalRepo = $entityManager->getRepository(Animal::class);

        //Find para conseguir objeto
        $animal = $animalRepo->find($id);

        //Comprobar si el objeto me llega
        if (!$animal) {
            $message = 'El animal no existe en la BBDD';
        }else{
            //Asignarle los valores al objeto
            $animal->setTipo('Perro '.$id);
            $animal->setColor('Rojo');

            //Persistir en doctrine (Esto no es necesario)
            $entityManager->persist($animal);

            //Guardar en la BD
            $entityManager->flush();

            $message = 'Has actualizado el animal '.$animal->getId();
        }

        //Respuesta
        return new Response($message);
    }

    public function delete(Animal $animal){

        $entityManager = $this->getDoctrine()->getManager();

        if ($animal && is_object($animal)) {

            $entityManager->remove($animal);

            $entityManager->flush();

            $message = 'Animal borrado correctamente';
        }else{
            $message = 'Animal no encontrado';
        }


        return new Response($message);
    }
}
