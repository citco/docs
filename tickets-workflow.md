#**Tickets workflow in CIT projects**

This document explains the "ticket life cycle" and discusses how a developer should choose a ticket, how to work on it, and also when and why any fields of the ticket should be changed.

###Table of Contents
[1. When and how should I raise a new ticket?](#1-when-and-how-should-i-raise-a-new-ticket)
[3. What does ticket pool mean?](#3-what-does-ticket-pool-mean)
[4. There are some tickets assigned to me, does it matter which one I choose to work on?](#4-there-are-some-tickets-assigned-to-me-does-it-matter-which-one-i-choose-to-work-on)
[5. What should I do when there is something urgent?](#5-what-should-i-do-when-there-is-something-urgent)
[6. What should I do when I start working on a ticket?](#6-what-should-i-do-when-i-start-working-on-a-ticket)
[7. I think I’ve completed writing the code for a ticket, now I’m testing it on my local development environment. Should I do anything at this point?](#7-i-think-ive-completed-writing-the-code-for-a-ticket-now-im-testing-it-on-my-local-development-environment-should-i-do-anything-at-this-point)
[8. OK, testing is completed. What is the next?](#8-ok-testing-is-completed-what-is-the-next)
[9. When should I change the ticket “Status” to “Needs Approval”?](#9-when-should-i-change-the-ticket-status-to-needs-approval)
[10. When can I change the ticket “Status” to “On Hold”?](#10-when-can-i-change-the-ticket-status-to-on-hold)
[11. For some reason it’s not possible to work on a ticket and it should be held for a long time. What should I do in this situation?](#11-for-some-reason-its-not-possible-to-work-on-a-ticket-and-it-should-be-held-for-a-long-time-what-should-i-do-in-this-situation)
[12. What should i do when something is not going to be fixed?](#12-what-should-i-do-when-something-is-not-going-to-be-fixed)
[13. The source code has been changed and it’s ready to be deployed but for a reason I can’t update the server. What should I do in this situation?](#13-the-source-code-has-been-changed-and-its-ready-to-be-deployed-but-for-a-reason-i-cant-update-the-server-what-should-i-do-in-this-situation)
[14. Is there any way which I can set my upcoming ticket?](#14-is-there-any-way-which-i-can-set-my-upcoming-ticket)
[15. A “Deployed Live” ticket has been assigned to me. What should I do?](#15-a-deployed-live-ticket-has-been-assigned-to-me-what-should-i-do)
[16. When should I change the ticket “Status” to “Needs work”?](#16-when-should-i-change-the-ticket-status-to-needs-work)
[17. A ticket with “Status” of “Needs Approval” has been assigned to me. What should I do?](#17-a-ticket-with-status-of-needs-approval-has-been-assigned-to-me-what-should-i-do)

##**1. When and how should I raise a new ticket?**

For any request such as adding a **new feature** to a website, **debugging** an issue or even a simple **task** - improving this document - you need to raise a ticket with the following fields set:

- **Summary**: The ticket subject should be clear enough to be understood by other developers but it should not be too long.  
- **Description**: Any scenario that can explain the ticket with additional information needs to be added into the description field.  
- **Priority**: A ticket priority should be set to "Normal" unless there was a good reason to choose any other priority. So if you are not sure about the priority it would be better to set it to normal.  
- **Component**: The related product needs to be selected here.  
- **Type**: When you want to add a new feature or fix a bug on a website, it should be set to either "Feature" or "Bug". When there is a situation that you need to support other people e.g. answering some technical questions, it should be set to "Support". When it's not any of above situations e.g. a ticket to improve this document, it should be set to "Task".  
- **Association**: If the ticket is related to any other tickets they should be linked to each other by using "Association" field.  
- **Status**: The ticket "Status" will be set to "New" by default so you don't need to change it.  
- **Assign To**: Always set it to "None" but if there is a situation where you need something from any other members, you should assign it to that particular member.  
- **Version**: None  
- **Responsible**: None  
- **Milestone**: None  

*If the issue or request is related to a ticket which is already closed you should use **Association** field to make a reference to the closed ticket.*

[Back](#tickets-workflow-in-cit-projects)

##**2. There is no ticket assigned to me. What should I do?**

When there is not a ticket left on your task list, you need to move some tickets from the ticket pool to your task list by changing ticket **"Assignee" to your user id**. To proceed, please talk to your supervisor and change the ticket **"Status" to "Planned"** once you have the necessary information to start working on it.

[Back](#tickets-workflow-in-cit-projects)

##**3. What does ticket pool mean?**

For any new request we should raise a ticket. We keep all these new tickets in ticket pool till someone starts to work on them. Tickets in the ticket pool should have "Status" of "New" or "Postponed" and "Assignee" of "None".

[Back](#tickets-workflow-in-cit-projects)

##**4. There are some tickets assigned to me, does it matter which one I choose to work on?**

Tickets have other fields besides their numbers which we use to affect the order needed for tickets to be resolved. When the ticket timeline is completed and there is nothing more you can do with them, (i.e. All current tickets are marked as "Done", "Resolved", "On hold", etc) you should choose a new ticket from those assigned to you. To do so, you are advised to take following steps:

- Tickets with **"Status" of "Urgent"** are very important so you should hold all your current tasks and start to work on these tickets immediately.
- If you see any ticket in your ticket list with **"Status" of "Deployed Live", "Done" or "Will not fix"**, it means you are supervising someone else in your team so you should check these tickets first, before starting to work on any other ticket.
- Then search for tickets with **"Status" of "Needs work"**, if there is any ticket with this status left, it means you have already resolved it but it seems that it is not accepted.
- If you see a ticket in your ticket list with **"Status" of "Needs Approval"**, you should do something about them before choosing any other ticket.
- If there is any ticket with **"Status" of "New"**, it means someone in your team has raised a ticket and is waiting for you so choose that one.
- If there is any ticket with **"Status" of "On Hold" or "Waiting deployment"** which it does not need to be held any more, you should choose from those.
- If you are still looking for a ticket, choose a ticket from those with **"Status" of "Planned" or "Upcoming"**.
- If there is no ticket left, review this section: [There is no ticket assigned to me](#2-there-is-no-ticket-assigned-to-me-what-should-i-do).

*As a thumb rule if there are several tickets to choose, always select the one with highest priority. If there are more than one ticket with this criterion, choose the oldest ticket.*

[Back](#tickets-workflow-in-cit-projects)

##**5. What should I do when there is something urgent?**

If you want to report something urgent, raise a ticket for the problem and set the **"Status" to "Urgent"**. Please note, these tickets must always be **assigned to someone**, so if for some reasons you are not going to take action about the problem, discuss the situation with team members so it gets clear who is going to solve the problem.

*If there is an urgent ticket assigned to you, **you must stop working on any other ticket** by holding them and start working on the urgent ticket immediately.*

[Back](#tickets-workflow-in-cit-projects)

##**6. What should I do when I start working on a ticket?**

When you're going to start working on a ticket, you should change the ticket **"Status" to "Working"**.

*Please keep in mind, you should not work on multiple tickets at the same time. That means there should be no more than one ticket with "Status" of "Working" in the list of tickets assigned to you.*

[Back](#tickets-workflow-in-cit-projects)

##**7. I think I've completed writing the code for a ticket, now I'm testing it on my local development environment. Should I do anything at this point?**

Yes. Depending on the ticket type change it's **"Status" to "Reviewing" or "Testing"** so others will know about the progress.

*if the ticket type is "Feature" or "Bug" you can use "Testing" or if the ticket type is "Task" you can use "Reviewing".*

[Back](#tickets-workflow-in-cit-projects)

##**8. OK, testing is completed. What is the next?**

When you have tested what you have worked on (changing some codes, updating a library, etc.) and everything seems fine, it's time to deploy these changes. Commit the changes and push them to code repository. Don't forget to add the ticket number to your commit description. Then these are the steps you should take:

1. **Update development server** (which is usually referred to as "dev site"). You can do this via CitCo Panel. At this point to let the others know the code on development server is changed, change the ticket **"Status" to "Deployed Dev"**.
2. After performing tests on the development server to make sure everything is perfect, it's time to **update the production server** (which is usually referred to as "live site"). This also could be done via CitCo panel. At this point, change the ticket **"Status" to "Deployed Live"**.
3. Change the ticket **"Responsible" to your user id**.
4. After all you should **assign the ticket to whoever has the responsibility to supervise you**.

*Sometimes the ticket is only a task and there is nothing to be deployed to the server like a ticket to improve this document, in this case change the ticket "Status" to "Done" and ignore the first and second step.*

[Back](#tickets-workflow-in-cit-projects)

##**9. When should I change the ticket "Status" to "Needs Approval"?**

Let's say there is a situation which you are not able to work on a ticket because you have to wait for someone else's approval, in this situation you can change the ticket **"Status" to "Needs Approval"** and **reassign the ticket to that person**. You should also add a comment and explain what needs to be approved.

[Back](#tickets-workflow-in-cit-projects)

##**10. When can I change the ticket "Status" to "On Hold"?**

Let's say there is a situation which you are not able to work on a ticket for a while, in this situation you can change the ticket **"Status" to "On Hold"**. You should also add a comment and explain the reason.

*If the ticket is held because you need something from other member, you should raise and assign a new ticket to that person. Also use "Association" field to make relation between these two tickets.*

[Back](#tickets-workflow-in-cit-projects)

##**11. For some reason it's not possible to work on a ticket and it should be held for a long time. What should I do in this situation?**

The ticket should be sent back to ticket pool. Also you should add a comment to explain the reason. To do that you need to change the ticket **"Assignee" to "No assignee"** and ticket **"Status" to "Postponed"**.

[Back](#tickets-workflow-in-cit-projects)

##**12. What should i do when something is not going to be fixed?**

Under some circumstances there is no possibility of fixing the issue or there is a good reason to ignore it. As such, you should change the ticket **"Status" to "Will not fix"** also change the **"Responsible" to your user id** and **assign the ticket to whoever has the responsibility to supervise you**.

[Back](#tickets-workflow-in-cit-projects)

##**13. The source code has been changed and it's ready to be deployed but for a reason I can't update the server. What should I do in this situation?**

If there is a situation which you are not able to deploy the changes or you are not able to update the server, you can change the ticket **"Status" to "Waiting deployment"**.

[Back](#tickets-workflow-in-cit-projects)

##**14. Is there any way which I can set my upcoming ticket?**

If you like to let other team members know or if you like to remind yourself which ticket will be your next ticket then you can change the ticket **"Status" to "Upcoming"**.

[Back](#tickets-workflow-in-cit-projects)

##**15. A "Deployed Live" ticket has been assigned to me. What should I do?**

It means you supervise someone else in your team, so you have the responsibility to check the changes and make sure everything is in correct working order, if so you can change ticket **"Status" to "Resolved"** and **assign the ticket to whoever has the responsibility to supervise you**.

*If you don't have any supervisor, you can change ticket "Status" to "Closed".*

[Back](#tickets-workflow-in-cit-projects)

##**16. When should I change the ticket "Status" to "Needs work"?**

You should only do this if you have responsibility to supervise someone and you find something wrong in a ticket that has been assigned to you. In this situation, you should change the ticket **"Status" to "Needs work"** and **reassign it back to the corresponding developer**.

*Don't forget to add a comment to the ticket and explain why you are reassigning the ticket.*

[Back](#tickets-workflow-in-cit-projects)

##**17. A ticket with "Status" of "Needs Approval" has been assigned to me. What should I do?**

It means someone needs your approval for what has been done on a ticket. See comments on the ticket for more information and decide whether or not you approve it. Add your comment to the ticket and **reassign it to the person** who previously has assigned it to you.

[Back](#tickets-workflow-in-cit-projects)

#**Ticket workflow diagram**

The below diagram shows the ticket "Status" states.

| Current state      | Can be changed to  | When                                             | Action                                                                    |
| ------------------ | ------------------ | ------------------------------------------------ | ------------------------------------------------------------------------- |
| New                | Planned            | You have all the information                     | Set the "Assignee" to your user id                                        |
| Postponed          | Planned            | You have all the information                     | Set the "Assignee" to your user id                                        |
| New                | Upcoming           | When It will be your next ticket                 | -                                                                         |
| Planned            | Upcoming           | When It will be your next ticket                 | -                                                                         |
| New                | Working            | You start to work on it                          | -                                                                         |
| Planned            | Working            | You start to work on it                          | -                                                                         |
| Urgent             | Working            | You start to work on it                          | -                                                                         |
| Upcoming           | Working            | You start to work on it                          | -                                                                         |
| Needs Approval     | Working            | You start to work again as it's approved         | -                                                                         |
| Needs work         | Working            | You start to work to resolve the issue           | -                                                                         |
| On Hold            | Working            | You start to work again as it's not held anymore | -                                                                         |
| Testing            | Working            | You start to work again as it needs more work    | -                                                                         |
| Reviewing          | Working            | You start to work again as it needs more work    | -                                                                         |
| Working            | On Hold            | For a reason is held                             | Add a comment, Raise a ticket and assign it to a member if it's necessary |
| Working            | Needs Approval     | For a reason is held                             | Add a comment, Reassign the ticket to a member                            |
| Working            | Postponed          | It's not going to be done soon                   | Add a comment, Set the "Assignee to" to "No Assignee"                     |
| Working            | Will not fix       | For a reason it's not possible to be fixed       | Add a comment, Set "Responsible" to your user id, Set the "Assignee to" to your supervisor                   |
| Working            | Testing            | It's in the testing state                        | -                                                                         |
| Working            | Reviewing          | It's in the testing state                        | -                                                                         |
| Testing            | Deployed Dev       | It's time to test on dev site                    | -                                                                         |
| Reviewing          | Done               | It's done there is nothing to be deployed        | Set "Responsible" to your user id, Set the "Assignee to" to your supervisor  |
| Will not fix       | Closed             | The ticket should be archived                    | -                                                                         |
| Deployed Dev       | Deployed Live      | It's done and been deployed to the server        | Set "Responsible" to your user id, Set the "Assignee to" to your supervisor  |
| Deployed Dev       | Waiting deployment | It's not the right time to make it live          | -                                                                         |
| Waiting deployment | Deployed Live      | It's done and been deployed to the server        | Set "Responsible" to your user id, Set the "Assignee to" to your supervisor  |
| Deployed Live      | Needs work         | There is an issue                                | Set the "Assignee to" to corresponding developer                          |
| Deployed Live      | Resolved           | The ticket is done                               | Set the "Assignee to" to your supervisor                                  |
| Done               | Resolved           | The ticket is done                               | Set the "Assignee to" to your supervisor                                  |
| Resolved           | Closed             | The ticket should be archived                    | -                                                                         |

[Back](#tickets-workflow-in-cit-projects)

`Version 1.0.0`
