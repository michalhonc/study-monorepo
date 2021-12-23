      #lang racket

      ;; Pomocne funkce
      (define (leaf? node) (not (pair? node)))
      (define (left node) (cadr node))
      (define (right node) (caddr node))
      (define (label node) (if (leaf? node) node (car node)))

      (define (delete list)
        (cond
          ((null? list) '())
          ((equal? "null" (car list))
            (delete (cdr list))
          )
          (else (cons (car list) (delete (cdr list))))))

      (define (pre-order node)
        (cons
        (label node)
        (if (leaf? node)
            '()
            (append
              (pre-order (left node))
              (pre-order (right node))
            )
          )
        )
      )

      (define (post-order node)
        (append
          (if (leaf? node) '()
            (append
                (post-order (left node))
                (post-order (right node))
            )
          )
          (list (label node))
        )
      )

      (define (in-order node)
        (if (leaf? node)
          (list (label node))
          (append
            (in-order (left node))
            (append
              (list (label node))
              (in-order (right node))
            )
          )
        )
      )

      (define (stats node)
        (define tree (delete (in-order node)))
        
        (define (sum list)
          (if
          (null? list) 0
          (+ (car list) (sum (cdr list)))
          )
        )

        (define (max list)
          (if (null? (cdr list)) 
              (car list) 
              (if (< (car list) (max (cdr list)))  
                  (max (cdr list)) 
                  (car list)
              )
          )
        )

        (define (length list)
          (if (null? list) 0
              (+ 1 (length (cdr list)))
           )
        )

        (printf "SUM: ~a \n" (sum tree))
        (printf "MAX: ~a \n" (max tree))
        (printf "LENGTH: ~a \n" (length tree))
        
      )


      (define tree '(1 (2 3 (4 5 6)) (7 "null" (8 9 "null"))))
      (printf "Zadani: ~a\n\n" tree)
      (printf "**********************************")
      (printf "\n")
      (printf "Pre-order: ~a \n" (delete (pre-order tree)))
      (printf "Post-order: ~a \n" (delete (post-order tree)))
      (printf "In-order: ~a \n" (delete (in-order tree)))
      (printf "Stats: \n")
      (stats tree)