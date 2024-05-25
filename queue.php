<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="css/queue.css">
    <script src="https://kit.fontawesome.com/0136fe14f5.js" crossorigin="anonymous"></script>
    <title>Queue</title>

<body>
<?php include 'includes/navbar.php' ?>
    </div>
    <section class="mmb">
        <div class="container">
            <div class="form-container">
                <article class="f1">
                    <h1>What is Queue?</h1>
                    <br>
                    <div class="data">
                        <div class="container1">
                            <div class="form-container1">
                                <div>
                                    <br>
                                    <ul>
                                        <li>A Queue is a linear structure which follows a particular order in which the
                                            operations are performed.</li>
                                        <br>
                                        <li>The order is First In First Out (FIFO).
                                            A good example of a queue is any queue of consumers for a resource where the
                                            consumer that came first is served first.</li>
                                        <br>
                                        <li>The difference between stacks and queues is in removing.
                                            In a stack we remove the item the most recently added; in a queue, we remove
                                            the item the least recently added.</li>
                                        </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <img src="https://static.javatpoint.com/ds/images/queue.png" alt="">
                    </div>

                    <div class="d1">

                        <h3 class="d2">Types of Queues</h3>

                    </div>
                    <br>
                    <div class="btn">
                        <div class="dropdown">
                            <div>
                                <button style="width: 220px;">Linear Queue</button>
                            </div>
                            <div class="dropdown-content">
                                <ul>
                                    <li> Linear Queue, an insertion takes place from one end while the deletion occurs
                                        from another end.</li>
                                    <br>
                                    <li>The end at which the insertion takes place is known as the rear end, and the end
                                        at which the deletion takes place is known as front end.</li>
                                    <br>
                                    <li> It strictly follows the FIFO rule.</li>
                                    <br>
                                    <li>The major drawback of using a linear Queue is that insertion is done only from
                                        the rear end.</li>
                                    <br>
                                    <li>If the first three elements are deleted from the Queue, we cannot insert more
                                        elements even though the space is available in a Linear Queue.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn">
                                <button style="width: 220px;">Circular Queue</button>
                            </div>
                            <div class="dropdown-content">
                                <ul>
                                    <li>In Circular Queue, all the nodes are represented as circular. It is similar to
                                        the linear Queue except that the last element of the queue is connected to the
                                        first element.</li>
                                    <br>
                                    <li>It is also known as Ring Buffer, as all the ends are connected to another end.
                                    </li>
                                    <br>
                                    <li>The drawback that occurs in a linear queue is overcome by using the circular
                                        queue.</li>
                                    <br>
                                    <li>If the empty space is available in a circular queue, the new element can be
                                        added in an empty space by simply incrementing the value of rear.</li>
                                    <br>
                                    <li>The main advantage of using the circular queue is better memory utilization.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn">
                            <div class="dropdown">
                                <div>
                                    <button style="width: 220px;">Priority Queue</button>
                                </div>
                                <div class="dropdown-content">
                                    <ul>
                                        <li>It is a special type of queue in which the elements are arranged based on
                                            the priority.</li>
                                        <br>
                                        <li>It is a special type of queue data structure in which every element has a
                                            priority associated with it.</li>
                                        <br>
                                        <li>Suppose some elements occur with the same priority, they will be arranged
                                            according to the FIFO principle.</li>
                                        <br>
                                        <li>Insertion in priority queue takes place based on the arrival, while deletion
                                            in the priority queue occurs based on the priority. Priority queue is mainly
                                            used to implement the CPU scheduling algorithms.</li>
                                        <br>
                                        <li>There are two types of priority queue that are discussed as follows-
                                            <ul>
                                                <li>Ascending Priority Queue</li>
                                                <li>Descending Priority Queue</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown">
                                <div class="btn">
                                    <button style="width: 220px;">Double Ended Queue</button>
                                </div>
                                <div class="dropdown-content">
                                    <ul>
                                        <li>In Deque or Double Ended Queue, insertion and deletion can be done from both
                                            ends of the queue either from the front or rear.</li>
                                        <br>
                                        <li>It means that we can insert and delete elements from both front and rear
                                            ends of the queue.</li>
                                        <br>
                                        <li>Deque can be used as a palindrome checker means that if we read the string
                                            from both ends, then the string would be the same.</li>
                                        <br>
                                        <li>Deque can be used both as stack and queue as it allows the insertion and
                                            deletion operations on both ends.</li>
                                        <br>
                                        <li>Deque can be considered as stack because stack follows the LIFO (Last In
                                            First Out) principle in which insertion and deletion both can be performed
                                            only from one end.</li>
                                        <br>
                                    </ul>
                                </div>
                            </div>


                            <br><br>
                            <div class="container2">
                                <div class="form-container1">

                                    <div>
                                        <strong style="font-size: 18px; margin-left: 20px; display: flex; justify-content: center;">
                                            Priority Queue
                                        </strong>
                                        <div>
                                            <ul>
                                                <li>
                                                    A <b>priority queue</b> is an abstract data type that behaves
                                                    similarly to the normal queue except that each element has some
                                                    priority, i.e., the element with the highest priority would come
                                                    first in a priority queue. The priority of the elements in a
                                                    priority queue will determine the order in which elements are
                                                    removed from the priority queue.
                                                </li>
                                                <br>
                                                <li>The <b>priority queue</b> supports only comparable elements, which
                                                    means that the elements are either arranged in an ascending or
                                                    descending order.</li>
                                                <br>
                                                <li>For example, suppose we have some values like 1, 3, 4, 8, 14, 22
                                                    inserted in a priority queue with an ordering imposed on the values
                                                    is from least to the greatest. Therefore, the 1 number would be
                                                    having the highest priority while 22 will be having the lowest
                                                    priority.</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container2">
                                <div class="form-container1">

                                    <div>
                                        <div>
                                            <strong style="font-size: 20px; margin-left: 20px;">
                                                Characteristics of Priority Queue
                                            </strong>
                                            <ul>
                                                <li>
                                                    Every element in a <b>priority queue</b> has some priority
                                                    associated with it.
                                                </li>
                                                <br>
                                                <li>
                                                    An element with the higher priority will be deleted before the
                                                    deletion of the lesser priority.
                                                </li>
                                                <br>
                                                <li>
                                                    If two elements in a priority queue have the same priority, they
                                                    will be arranged using the FIFO principle.
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container2">
                                <div class="form-container1">

                                    <div>
                                        <br><br>
                                        <strong style="font-size: 20px; margin-left: 20px;">
                                            Types of Priority Queue:
                                        </strong>
                                        <br>
                                        <ul>
                                            <li>
                                                <b>Ascending order priority queue:</b> In ascending order priority
                                                queue, a lower priority number is given as a higher priority in a
                                                priority. For example, we take the numbers from 1 to 5 arranged in an
                                                ascending order like 1,2,3,4,5; therefore, the smallest number, i.e., 1
                                                is given as the highest priority in a priority queue.
                                            </li>
                                            <br>
                                            <li>
                                                <b>Descending order priority queue: </b>In descending order priority
                                                queue, a higher priority number is given as a higher priority in a
                                                priority. For example, we take the numbers from 1 to 5 arranged in
                                                descending order like 5, 4, 3, 2, 1; therefore, the largest number,
                                                i.e., 5 is given as the highest priority in a priority queue.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container2">
                                <div class="form-container1">

                                    <div>
                                        <br><br>
                                        <strong style="font-size: 20px; margin-left: 20px; display: flex; justify-content: center;">
                                            Implimentation of Priority Queue:
                                        </strong>
                                        <br>
                                        <div>
                                            <div class="dropdown">
                                                <div class="btn2">
                                                    <button style="width: 220px;margin-left: 250px;"> <a style="text-decoration: none; color: white;" href="ascending.php">Ascending</a></button>
                                                </div>

                                            </div>
                                            <div class="dropdown">
                                                <div class="btn2">
                                                    <button style="width: 220px;"><a style="text-decoration: none; color: white;" href="descending.php">Descending</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </article>
            </div>
        </div>

    </section>
    <div style="margin-top: 20px; font-family: 'Montserrat', sans-serif;font-size: 14px; color: black; display: flex; justify-content: center;">
        <footer class="foot">
            <p><span>©</span> Copyright PQI 2021. All rights reserved.</p>
        </footer>
    </div>




</body>

</html>